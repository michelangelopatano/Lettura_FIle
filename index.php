<?php
    $file = fopen("log.csv", "r");
    if (!$file){
        die("ERRORE");  
    }
        
    
    while(!feof($file)){
        $row = fgets($file);
        $ = explode(",", $raws);
        echo "<br>"; 
    }


?>