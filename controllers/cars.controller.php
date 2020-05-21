<?php

require_once ('models/cars.model.php');

class CarsController{

    private $carsModel;
    private $carsView;

    public function __construct(){

        $this->carsModel = new CarsModel();        
        //$this->carsView = new CarsView();
    }

    public function showCars(){
        //Traigo todas las publicaciones del modelo
        $cars=$this->carsModel->getAllCars();
        var_dump($cars); die();
        //Muestro todas las publicaciones en la vista
        //$this->carsView->show_cars($cars);
    }
}