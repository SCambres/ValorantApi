<?php

class Utilidades {

    
    function __construct(){
    
    }

public function callCurl($url){
    $ch = curl_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);

    $response = curl_exec($ch);

    $datos = json_decode($response);

    curl_close($ch);

    return $datos;
}

}