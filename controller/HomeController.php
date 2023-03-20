<?php

class HomeController {
    function __construct(){
    }

    /**
     * @throws SmartyException
     */

    function main (){

        global $smarty;
     
        $smarty->display("pages/homeView.tpl");
    }
}