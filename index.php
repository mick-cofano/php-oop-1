<?php

  class Automobile {

    public $marca;

    public $modello;

    public $prezzo;


    public function __construct($marca, $modello, $prezzo) {
      $this->marca = $marca;
      $this->modello = $modello;
      $this->prezzo = $prezzo;
    }
  }

  $ford = new Automobile('Ford', 'Fiesta', '19500€');
    echo $ford->marca . '<br/>';
    echo $ford->modello . '<br/>';
    echo $ford->prezzo . '<br/>' . '<br/>' . '<br/>';
  $ferrari = new Automobile('Ferrari', 'SF-90 Stradale', '515000€');
    echo $ferrari->marca . '<br/>';
    echo $ferrari->modello . '<br/>';
    echo $ferrari->prezzo . '<br/>' . '<br/>' . '<br/>';
  $jeep = new Automobile('Jeep', 'Wrangler', '49500€');
    echo $jeep->marca . '<br/>';
    echo $jeep->modello . '<br/>';
    echo $jeep->prezzo . '<br/>' . '<br/>' . '<br/>';
  $chevrolet = new Automobile('Chevrolet', 'Corvette C8', '158000€');
    echo $chevrolet->marca . '<br/>';
    echo $chevrolet->modello . '<br/>';
    echo $chevrolet->prezzo . '<br/>' . '<br/>' . '<br/>';


 ?>
