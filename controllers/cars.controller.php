<?php

require_once 'models/cars.model.php';
require_once 'views/cars.view.php';
require_once 'views/fail.view.php';

class CarsController{

    private $carsModel;
    private $carsView;
    private $failView;

    public function __construct(){

        $this->carsModel = new CarsModel();        
        $this->carsView = new CarsView();
        $this->failView = new FailView();
    }

    public function showCars(){
        //Traigo todas las publicaciones del modelo
        $cars=$this->carsModel->getAllCars();

        //Muestro todas las publicaciones en la vista
        $this->carsView->show_cars($cars);
    }

    //FUNCION MOSTRAR UN AUTO
    public function showCar($id_car){
        // pido el auto al MODELO
        $car = $this->carsModel->getCar($id_car);
        if (!empty($car)){
            // actualizo la vista
            $this->carsView->show_car($car);
        }
        else{$this->failView->show_fail('El Vehiculo no existe');}
        
    }
    
}