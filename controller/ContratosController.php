<?php

class ContratosController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
     
        $smarty->display("pages/contratosView.tpl");
    }
}