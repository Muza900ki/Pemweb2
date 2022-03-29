<?php

class Fruit{

public $name;
public $color;
public $weight;

function set_name($n) { //a public function(default)
    $this->name = $n;
    }
protected function set_color($n) { //a protected function
    $this->color = $n;
    }
private function set_weight($n) { //a function private
    $this->weight = $n;
    }
}
$mango = new fruit();
$mango->name = "Mango";//OK
$mango->color = "Yellow";//ERROR
$mango->weight = "300";//ERROR

?>