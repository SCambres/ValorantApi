<?php

class CardsplayerController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlCards = "https://valorant-api.com/v1/playercards?language=es-ES";
        
        $dataCards = $utils->callCurl($urlCards);
        
        $smarty->assign("dataCards", $dataCards);
     
        $smarty->display("pages/cardsplayerView.tpl");
    }
}