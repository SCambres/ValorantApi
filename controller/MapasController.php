<?php

class MapasController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlMaps = "https://valorant-api.com/v1/maps?language=es-ES";
        
        $dataMaps = $utils->callCurl($urlMaps);
        
        $smarty->assign("dataMaps", $dataMaps);
        $smarty->display("pages/mapasView.tpl");
    }
}