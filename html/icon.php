
<?php

$handle = opendir(dirname(realpath(__FILE__)).'/icons/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '
                <div style="    display: inline-block;
    padding: 20px 30px;
    border: 1px solid #526a80;
    width: 140px;
    height: 140px;
    text-align: center;">
                <img src="icons/'.$file.'" border="0" style="display: block;
    padding: 20px;
    text-align: center;
    margin: 0 auto;" />
                '.$file.'
                </div>
                ';
            }
        }?>
