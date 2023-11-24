<?php

class Car {
  public $brand = "BMW";
  private $mileage= 89989;



    public function __construct($b, $m){
        $this->brand = $b;
        $this->mileage = $m;
    }
    public function __destruct(){
        echo $this->brand . " is dead at mileage". " " . $this->mileage;
    }
    public function increaseMileage($amount){
    $this->mileage += $amount;
     }
        
    
}