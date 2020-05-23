<?php

class CarsModel{

    public static function getConection() {
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'db_autos';

        try {
        $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        // solo en modo desarrollo
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            var_dump($e);
        }
        return $pdo;
    }


    public function getAllCars(){
        // abre la conexión con MySQL 
        $db = $this->getConection();
        //envia la consulta
        $sentencia = $db->prepare("SELECT * FROM autos JOIN marcas ON (id_marca_fk=id_marca)"); // prepara la consulta
        $sentencia->execute(); // ejecuta
        $autos = $sentencia->fetchAll(PDO::FETCH_OBJ); // obtiene la respuesta
        return $autos;        

    }

        public function getCar($id_car){
        // abre la conexión con MySQL 
        $db = $this->getConection();
        //envia la consulta
        $sentencia = $db->prepare("SELECT * FROM autos JOIN marcas ON (id_marca_fk=id_marca) WHERE id_auto = ?"); // prepara la consulta
        $sentencia->execute([$id_car]); // ejecuta
        $car = $sentencia->fetch(PDO::FETCH_OBJ); // obtiene la respuesta
        return $car;        

    }


}