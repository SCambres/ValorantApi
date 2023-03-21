<?php

class RangosController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlRangos = "https://valorant-api.com/v1/competitivetiers/564d8e28-c226-3180-6285-e48a390db8b1/?language=es-ES";
        
        $dataRangos = $utils->callCurl($urlRangos);
        
        $smarty->assign("dataRangos", $dataRangos);
     
        $smarty->display("pages/rangosView.tpl");
    }
}