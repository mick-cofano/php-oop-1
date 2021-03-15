<?php

  class Car {

    public $brand;

    public $model;

    public $price;


    public function __construct($brand, $model, $price) {
      $this->brand = $brand;
      $this->model = $model;
      $this->price = $price;
    }

  }

  $ford = new Car('Ford', 'Fiesta', '19500€');
    echo $ford->brand . '<br/>';
    echo $ford->model . '<br/>';
    echo $ford->price . '<br/>' . '<br/>' . '<br/>';
  $ferrari = new Car('Ferrari', 'SF-90 Stradale', '515000€');
    echo $ferrari->brand . '<br/>';
    echo $ferrari->model . '<br/>';
    echo $ferrari->price . '<br/>' . '<br/>' . '<br/>';
  $jeep = new Car('Jeep', 'Wrangler', '49500€');
    echo $jeep->brand . '<br/>';
    echo $jeep->model . '<br/>';
    echo $jeep->price . '<br/>' . '<br/>' . '<br/>';
  $chevrolet = new Car('Chevrolet', 'Corvette C8', '158000€');
    echo $chevrolet->brand . '<br/>';
    echo $chevrolet->model . '<br/>';
    echo $chevrolet->price . '<br/>' . '<br/>' . '<br/>';


 ?>
