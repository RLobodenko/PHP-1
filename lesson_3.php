<?php


function listFiles($path){
    $files = scandir($path);
    foreach($files as $file){
        if($file != '.' && $file != '..'){
            if(is_dir($path.'/'.$file)){ 
                listFiles($path.'/'.$file);
            }else{
                echo $path.'/'.$file."<br />";
            }
        }
    }
}
listFiles('papka');