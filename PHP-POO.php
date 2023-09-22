<!DOCTYPE html>
<html>
<body>
<?php
class Car {
  public $brand;
  public $model;
  public $price;

  function __construct($model, $price){
    $this->model = $model;
    $this->price = $price;
  }

  function get_model(){
    return $this->model;
  }  
  
  function get_price(){
    return $this->price;
  }
}


$Volkswagen  = new Car("Passat", "7399$");
$Peugeot  = new Car("5008", "5500$");


echo $Volkswagen->get_model() . " Costs " . $Volkswagen->get_price() . " And " .  $Peugeot->get_model() . " Costs " . $Peugeot->get_price();
?>
</body>
</html>
