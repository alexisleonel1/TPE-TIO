<?php

require_once 'libs/Smarty.class.php';

class CarsView{
    public function show_cars($cars){
        $smarty = new Smarty();
        $smarty -> assign('base_url', BASE_URL);
        $smarty -> assign('titulo', 'Autos');
        $smarty -> assign('autos', $cars);
        $smarty -> display('home.tpl');
    }
}