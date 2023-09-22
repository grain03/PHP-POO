<?php
class Car {
  public $brand;
  public $model;

  function set_model($model){
    $this->model = $model;
  }

  function get_model(){
    return $this->model;
  }
}


$Volkswagen  = new Car();
$Volkswagen->set_model("Passat");


echo $Volkswagen->get_model();
?>
