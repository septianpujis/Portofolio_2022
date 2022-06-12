<?php
    if(!isset($_GET['lang'])){
        $_GET['lang'] = "id";
    }
    $json = file_get_contents("assets/".$_GET['lang']."_dict.json"); ;
    $text = json_decode($json,true);


?>