<?php

/*
class demo {


public function __construct()
{

echo "this is an constructor";
}



}


$a = new demo;
*/


class demo {


public $one;

public $two;

public function __construct($a, $b) {

$this->one = $a;
$this->two = $b;

}


public function add () {

$addition = $this->one + $this->two;
return $addition;


}

}


$a = new demo(6,2);
$b = $a->add();
echo $b;




