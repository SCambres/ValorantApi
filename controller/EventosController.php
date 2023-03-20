<?php

class EventosController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlEvents = "https://valorant-api.com/v1/events?language=es-ES";
        
        $dataEvents = $utils->callCurl($urlEvents);
        
        $smarty->assign("dataEvents", $dataEvents);
        $smarty->display("pages/eventosView.tpl");
    }
}