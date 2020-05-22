<?php

require_once 'libs/Smarty.class.php';

class FailView{
    public function show_fail($mensaje){
        $smarty = new Smarty();
        $smarty-> assign('error', $mensaje);
        $smarty-> assign('titulo', 'Error Fatal!');
        $smarty-> display('show_fail.tpl');
    }
}