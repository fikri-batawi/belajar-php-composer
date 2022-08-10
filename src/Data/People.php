<?php

namespace MuhammadFikri\Data;

class People {

  private string $name;

  public function __construct(string $name) 
  {
    $this->name = $name;
  }

  public function sayHello(string $name){
    echo "Hello $name, My name is $this->name" . PHP_EOL;
  }

}