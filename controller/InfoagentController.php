<?php

class InfoagentController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();

        $uuid = $_GET['agent'];
        
        $urlInfoAgent = "https://valorant-api.com/v1/agents/$uuid?language=es-ES";
        
        $dataInfoAgent = $utils->callCurl($urlInfoAgent);
        
        $smarty->assign("dataInfoAgent", $dataInfoAgent);
     
        $smarty->display("pages/infoagentView.tpl");
    }
}