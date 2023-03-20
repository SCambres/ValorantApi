<?php

class ContratosController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlContracts = "https://valorant-api.com/v1/contracts?language=es-ES";
        
        $dataContracts = $utils->callCurl($urlContracts);

        $smarty->assign("dataContracts", $dataContracts);
     
        $smarty->display("pages/contratosView.tpl");
    }
}