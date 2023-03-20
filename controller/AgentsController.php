<?php

class AgentsController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
        $utils = new Utilidades ();
        
        $urlAgents = "https://valorant-api.com/v1/agents?isPlayableCharacter=true";
        
        $dataAgents = $utils->callCurl($urlAgents);
        
        $smarty->assign("dataAgents", $dataAgents);
     
        $smarty->display("pages/agentsView.tpl");
    }
}