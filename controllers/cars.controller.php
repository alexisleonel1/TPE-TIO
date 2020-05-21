<?php

require_once 'controllers/cars.views.php';

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