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

  class Dealer {

    public $name;

    private $cars = [];

    public function __construct($name) {
      $this->name = $name;
    }

    public function addCar(Car $car) {
      $this->cars[] = $car;
    }

    public function getCars() {
      return $this->cars;
    }

  }

  $ford = new Car('Ford', 'Fiesta', '19500€');
    // echo $ford->brand . '<br/>';
    // echo $ford->model . '<br/>';
    // echo $ford->price . '<br/>' . '<br/>' . '<br/>';
  $ferrari = new Car('Ferrari', 'SF-90 Stradale', '515000€');
    // echo $ferrari->brand . '<br/>';
    // echo $ferrari->model . '<br/>';
    // echo $ferrari->price . '<br/>' . '<br/>' . '<br/>';
  $jeep = new Car('Jeep', 'Wrangler', '49500€');
    // echo $jeep->brand . '<br/>';
    // echo $jeep->model . '<br/>';
    // echo $jeep->price . '<br/>' . '<br/>' . '<br/>';
  $chevrolet = new Car('Chevrolet', 'Corvette C8', '158000€');
    // echo $chevrolet->brand . '<br/>';
    // echo $chevrolet->model . '<br/>';
    // echo $chevrolet->price . '<br/>' . '<br/>' . '<br/>';


    $newDealer = new Dealer('Mick Cofano Dealer');
    $newDealer->addCar($ford);
    $newDealer->addCar($ferrari);
    $newDealer->addCar($jeep);
    $newDealer->addCar($chevrolet);


    // questo l'ho cercato su stack-overflow per mettere il print_r in tante righe quanti sono gli oggetti XD
    echo "<pre>";
    print_r($newDealer->getCars());
    echo "</pre>";

 ?>
