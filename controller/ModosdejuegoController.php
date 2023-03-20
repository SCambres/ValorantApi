<?php

class ModosdejuegoController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlModes = "https://valorant-api.com/v1/gamemodes?language=es-ES";
        
        $dataModes = $utils->callCurl($urlModes);
        
        $smarty->assign("dataModes", $dataModes);
     
        $smarty->display("pages/modosdejuegoView.tpl");
    }
}