<?php

class GunsskinController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;

        $utils = new Utilidades ();
        
        $urlGunsSkin = "https://valorant-api.com/v1/weapons/skins?language=es-ES";
        
        $dataGunsSkin = $utils->callCurl($urlGunsSkin);
        
        $smarty->assign("dataGunsSkin", $dataGunsSkin);
     
        $smarty->display("pages/armasskinView.tpl");
    }
}