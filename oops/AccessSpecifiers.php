<?php

class Foods {

public $drinks = 'juice';

protected $fruits = 'banana';

private $vegetables = 'carrot';


    public function stuffs(){

       return $this->fruits;

    }

   public function pri($vegname) {

     return $this->vegatables = $vegname;
   }
}



class Fruits extends Foods {

 public function f2($fr)
 {
   return $this->fruits = $fr;
 }

}

$var = new Fruits();
//$var->fruits;
$val = $var->f2('papaya');
echo $val;




