
<?php

            
$handle = opendir(public_path('landingImages/icons/'));


        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '
                <div style="    display: inline-block;
    padding: 20px 30px;
    border: 1px solid #526a80;
    width: 140px;
    height: 140px;
    text-align: center;">
                <img src="'.asset('landingImages/icons').'/'.$file.'" border="0" style="display: block;
                
    padding: 20px;
    text-align: center;
    margin: 0 auto;" />
                '.$file.'
                </div>
                ';
            }
        }
