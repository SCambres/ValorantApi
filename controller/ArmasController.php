<?php

class ArmasController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlGuns = "https://valorant-api.com/v1/weapons?language=es-ES";
        
        $dataGuns = $utils->callCurl($urlGuns);
        
        $smarty->assign("dataGuns", $dataGuns);
     
        $smarty->display("pages/armasView.tpl");
    }
}