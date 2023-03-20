<?php

class InfocontractController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();

        $uuid = $_GET['contract'];
        
        $urlInfoContract = "https://valorant-api.com/v1/contracts/$uuid?language=es-ES";
        
        $dataInfoContract = $utils->callCurl($urlInfoContract);
        
        $smarty->assign("dataInfoContract", $dataInfoContract);
     
        $smarty->display("pages/infocontractView.tpl");
    }
}