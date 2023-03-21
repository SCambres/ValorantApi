<?php

class ChromasskinController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;

        $utils = new Utilidades ();
        
        $urlChromasSkin = "https://valorant-api.com/v1/weapons/skins?language=es-ES";
        
        $dataChromasSkin = $utils->callCurl($urlChromasSkin);
        
        $smarty->assign("dataGunsSkin", $dataChromasSkin);
     
        $smarty->display("pages/chromasskinView.tpl");
    }
}