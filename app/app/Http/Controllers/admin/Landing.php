<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;
use inoledge\Http\Controllers\Controller;
use  inoledge\crawling;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

class Landing extends Controller
{
	public function __construct()
    {
		    
            $this->middleware('auth');
    }
	public function start()
	{
		
		$link = "http://hayatouki.com/health/content?page=";
		//$this->get_links($link);
		
		$count = 60; 
		for($i =1;$i <=$count;$i++)
		{  
	        $n_link = $link.$i;  
			$this->get_links($n_link);
			
		}
		
	}
    public function get_links($link)
	{
		//$user = auth()->user();
        //$course_id = $request->input('id');
       
		$c = curl_init();
		curl_setopt($c, CURLOPT_TIMEOUT, 10);
        curl_setopt($c, CURLOPT_URL, $link);
        libxml_use_internal_errors(true);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        $html = curl_exec($c);
        $doc =  new \DOMDocument();
        $doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        //get titles for each lesson
        $finder = new \DomXPath($doc);
        $node = $finder->query("//h2[@class='jdf_module_image__title']/a");
        $count = count($node);
		
		for($i=0 ; $i<$count ;$i++)
        {
			$link  = $node->item($i)->getAttribute('href');
		    $_link = "http://hayatouki.com/".$link;
		    $id    = $this->get_id($_link);
			$this->getContent($id);
            
        }
		
		
	}
	public function getContent($id)
	{
		$user = auth()->user();
	    $link = 'http://hayatouki.com/diet/content/'.$id;
        $doc =  new \DOMDocument();
		$context = stream_context_create(
				array(
					'http' => array(
						'max_redirects' => 50000
					)
				)
			);
		$content = file_get_contents($link, false, $context);
		libxml_use_internal_errors(true);
        $doc->loadHTML($content);
		libxml_use_internal_errors(false);
		//Find Title
		$finder = new \DomXPath($doc);
        $node = $finder->query("//header//h1");
		$title = trim($node->item(0)->textContent);
		//Find Body
        $finder = new \DomXPath($doc);
		$classname = " line hasId jSliderContainer";
        $node = $finder->query("//*[@class = '$classname']//div");
		$str = preg_replace('~<figure(.*?)</figure>~Usi', "", $doc->saveHTML($node->item(0)));
	    $body = $this->removeLink($str);
		
		$cat = new crawling;
        $cat->title = $title;
        $cat->body = $body ;
        $cat->catID = '64';
        $slug = str_replace(' ','-',$title);
        $cat->slug =$slug; 
        $cat->date = date("Y-m-d H:i:s");
        $cat->author = $user->id;  
        $cat->save();
		
		
		
	}
	function removeLink($str)
	{
		$regex = '/<a (.*)<\/a>/isU';
		preg_match_all($regex,$str,$result);
		foreach($result[0] as $rs)
		{
			$regex = '/<a (.*)>(.*)<\/a>/isU';
			$text = preg_replace($regex,'$2',$rs);
			$str = str_replace($rs,$text,$str);
		}
		return $str;
	}
	public function get_id($link)
    {
		$arr =  explode('/',$link);
	    $id = explode('-',end($arr));
		return $id[0];
	}
}
