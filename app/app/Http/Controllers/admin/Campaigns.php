<?php

namespace inoledge\Http\Controllers\admin;

use Illuminate\Http\Request;

use inoledge\compaign;
use inoledge\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use DataTables;
use DB;

class Campaigns extends Controller
{
    
	public function locate()
	{
		
	   	$res = $this->getLocationInfoByIp();
		$current_date = date("Y-m-d");
		
		$visitor = new compaign;
        $visitor->country = $res['country'];
        $visitor->ip = $res['ip'];
        $visitor->timeZone = $res['timeZone'];
        $visitor->city = $res['city'];
        $visitor->save();
		
		return redirect('https://www.m3aarf.com/');
		
	}
	public function getLocationInfoByIp()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = @$_SERVER['REMOTE_ADDR'];
		$result  = array('country'=>'', 'city'=>'');
		if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
		}else{
			$ip = $remote;
		}
		$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
		if($ip_data && $ip_data->geoplugin_countryName != null){
			$result['country'] = $ip_data->geoplugin_countryName;
			$result['ip'] = $ip_data->geoplugin_request;
			$result['city'] = $ip_data->geoplugin_city;
			$result['timeZone'] = $ip_data->geoplugin_timezone;
		}
		return $result;
	}
	public function view()
	{
		return view('admin.comp.comp');
	}
   public function getVisitors()
    {
         $visitors = compaign::all();
         return DataTables::of($visitors)->make(true);
    }
  
}
