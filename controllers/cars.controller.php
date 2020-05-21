<?php

require_once ('models/cars.model.php');
require_once ('views/cars.view.php');

class CarsController{

    private $carsModel;
    private $carsView;

    public function __construct(){

        $this->carsModel = new CarsModel();        
        $this->carsView = new CarsView();
    }

    public function showCars(){
        //Traigo todas las publicaciones del modelo
        $cars=$this->carsModel->getAllCars();

        //Muestro todas las publicaciones en la vista
        $this->carsView->show_cars($cars);
    }
}