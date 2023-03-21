<?php

class SeassonController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        
        $utils = new Utilidades ();
        
        $urlSeasson = "https://valorant-api.com/v1/seasons?language=es-ES";
        
        $dataSeasson = $utils->callCurl($urlSeasson);
        
        $smarty->assign("dataSeasson", $dataSeasson);
        
        $smarty->display("pages/seassonView.tpl");
    }
}