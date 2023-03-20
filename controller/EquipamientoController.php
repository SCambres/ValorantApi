<?php

class EquipamientoController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlGear = "https://valorant-api.com/v1/gear?language=es-ES";
        
        $dataGear = $utils->callCurl($urlGear);
        
        $smarty->assign("dataGear", $dataGear);
     
        $smarty->display("pages/equipamientoView.tpl");
    }
}