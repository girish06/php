<?php

//****************************************Boolval concepts****************************************************.

echo "Boolval concepts";
echo "<br>";
echo "******************";
echo "<br>";
// integer value for boolval
$int_value = 0;
$boolval_int = boolval($int_value);
echo "string int: $boolval_int"; // return empty value, since it false , if true it return 1.

// string value for boolval
$string_value = "girish";
$boolval_string = boolval($string_value);
echo "<br>";
echo "string value: $boolval_string"; //  returns value 1.


// float value for boolval
 
$float_value = 0.0;
$boolval_float = boolval($float_value);
echo "<br>";
echo "Float value: $boolval_float";  // except 0.0 all boolval returns true.

// array value for boolval

$array_value = [0,1];
$boolval_array = boolval($array_value);
echo "<br>";
echo "Array value: $boolval_array"; // empty array returns false.

$object_value = new stdClass();
$boolval_object = boolval($object_value);
echo "<br>";
echo "Object value: $boolval_object";  // except 0.0 all boolval returns true.

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************Debug functions****************************************************.
echo "<br>";
echo "debug_zval_dump";
echo "<br>";
echo "******************";
echo "<br>";

$debug_zval_dump = "hello girish";
$var1 = '';
$var1 = & $debug_zval_dump;
debug_zval_dump($debug_zval_dump);

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************Doubleval alias of floatval*****************************************.
echo "<br>";
echo "doubleval is alias of floatval";
echo "<br>";
echo "******************";
echo "<br>";


$floatval_value = '123.343hello';
$floatval_output = floatval($floatval_value);
echo "floatvalright: $floatval_output";
echo "<br>";

$floatval_value_r = 'hellol123.343';
$floatval_output_r = floatval($floatval_value_r);
echo "floatvalleft: $floatval_output_r";
echo "<br>";


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************Empty****************************************.
echo "<br>";
echo "check empty";
echo "<br>";
echo "******************";
echo "<br>";  


$empty_var = 'FALSE';
$empty_var = [];
if(empty($empty_var)) {
   echo "variable is no value";
}
else{
  echo "varible has some value";
}


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************get_defined_vars****************************************.
echo "<br>";
echo "get_defined_vars";
echo "<br>";
echo "******************";
echo "<br>";  

$array_numbers = [0,1,2,3];
$arr = get_defined_vars();
print_r($arr);
//print_r($arr["array_numbers"]);
//echo $arr["_"]; // not working
//print_r($arr["argv"]); //  not working
print_r($arr["$_SERVER"]); //working
print_r(array_keys(get_defined_vars()));


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************get_resource_type****************************************.
echo "<br>";
echo "get_resource_type";
echo "<br>"; 
echo "******************";
echo "<br>"; 

//$file_hand =fopen("syllabus.txt","w");
//echo get_resource_type($file_hand); not working

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************gettype**************************************************.
echo "<br>";
echo "gettype";
echo "<br>";
echo "******************";
echo "<br>"; 

echo gettype('Hello string'); echo "<br>";
echo gettype(0); echo "</br>";
echo gettype(new stdclass()); echo "<br>";
echo gettype(array(0,1)); echo "<br>";
echo gettype(0.1); echo "<br>";
echo gettype(TRUE); echo "<br>";
echo gettype(null); echo "<br>";

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************intval**************************************************.
echo "<br>";
echo "intval";
echo "<br>";
echo "******************";
echo "<br>"; 



echo intval(102).'<br>';
echo intval(102.22).'<br>';
echo intval('102').'<br>';
echo intval(+102).'<br>';
echo intval(-102).'<br>';
echo intval(0102).'<br>';
echo intval('0002').'<br>';
echo intval(1e20).'<br>';
echo intval(0x1B).'<br>';
echo intval(10200000).'<br>';
echo intval(10200000000000000000).'<br>';
echo intval(10, 2).'<br>';
echo intval('10', 2).'<br>';

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_array**************************************************.
echo "<br>";
echo "is array";
echo "<br>";
echo "******************";
echo "<br>"; 


$isarray_var = array('hi','hello');
$empty_array = array("");

if(is_array($empty_array)) {
  echo "it is an array"; 
}
else {
echo "it is not an array";
}

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_bool**************************************************.
echo "<br>";
echo "is bool";
echo "<br>";
echo "******************";
echo "<br>"; 

$boolvalue = TRUE;

if(is_bool($boolvalue)) {
  echo "its a boolean value";
}
else {
 echo "oops its not a boolean value";

}

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_callable**************************************************.
echo "<br>";
echo "is_callable";
echo "<br>";
echo "******************";
echo "<br>"; 


function hello(){

} 

$func_variable ='hello';

var_dump(is_callable($func_variable, false, $callable_name));

echo "<br>";
echo $callable_name;
echo "<br>";
// another example of is_callable

class bangalore {

 function forum(){


 }
}

$classobj = new bangalore();

$array_obj = array($classobj, forum);

var_dump(is_callable($array_obj, TRUE, $callable_array));
echo "<br>";
echo $callable_array;


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_double or is_float or is_real**************************************************.
echo "<br>";
echo "is_double or is_float or is_reals";
echo "<br>";
echo "******************";
echo "<br>"; 

$flaot_var = '2.3';

if(is_float($flaot_var)) {
  echo "its a float value";
}
else {
 echo "its not a float";
}

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_int or is_integer* or is_long*************************************************.
echo "<br>";
echo "is_int or integer or is_long";
echo "<br>";
echo "******************";
echo "<br>"; 


$var_int = 23;

if(is_int($var_int)) {
echo "its an integer";
}
else {
echo "its not a integer";
}

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_null*************************************************.
echo "<br>";
echo "is_null";
echo "<br>";
echo "******************";
echo "<br>"; 


$isnull_var='NULL';

if(is_null($isnull_var)) {
    echo "its null";
}
else {
    echo "its not a null";
}




echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_numeric*************************************************.
echo "<br>";
echo "is_numeric";
echo "<br>";
echo "******************";
echo "<br>"; 


$arr_num_val = array('42', 23, 'abc', array(), '42.23', 42.3, 0x39,null);

foreach($arr_num_val as $keys) {
// check numeric values.
    if(is_numeric($keys)) {
      echo $keys.'-'." is a number";
      echo "<br>";
    }
    else {
      echo $keys.'-'. "is a not a number";
      echo "<br>";
    }
}


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_object*************************************************.
echo "<br>";
echo "is_object";
echo "<br>";
echo "******************";
echo "<br>"; 

class obj {

 function hello() {

 }

}

$obj_val = new obj();
$simple_var = 'hello';

if(is_object($obj_val)) {
 echo "Its an object";
} 
else {
 echo "Its not an object";
}


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_resource*************************************************.
echo "<br>";
echo "is_resource"; //  needs work
echo "<br>";
echo "******************";
echo "<br>"; 

/*
$resource_var = fopen('syllabus.txt', 'r');
if(is_resource($resource_var)) {
 echo "file opened successfully";
}
else {
  echo "Error in file opening";
}
*/


/*
$db_link = mysql_connect('localhost', 'root', 'root');
if (!is_resource($db_link)) {
 echo "mysql is not connected";
}
else {

 echo "successfully connected";
}
*/

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);
if(is_resource($conn)) {
  echo "Connected successfully";
}
else {
 echo "connection failed";

}

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_scalar*************************************************.
echo "<br>";
echo "is_scalar"; 
echo "<br>";
echo "******************";
echo "<br>"; 

$scalar_val = 100;
$scalar_val = 100.10;
$scalar_val = 'hello';
//$scalar_val = array(0,1);

if(is_scalar($scalar_val)) {
 echo $scalar_val .'-'."is a scalar value";
}
else {
echo $scalar_val .'-'. "is not a scalar value";
}

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************is_string*************************************************.
echo "<br>";
echo "is_string"; 
echo "<br>";
echo "******************";
echo "<br>"; 


$string_val = 'hi';
$string_val = 0;

if(is_string($string_val)) {
echo $string_val .'-'. "its a string";
}
else {
echo $string_val .'-'. "its not a string";
}


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************isset*************************************************.
echo "<br>";
echo "isset"; 
echo "<br>";
echo "******************";
echo "<br>"; 

$isset_val = NULLs;

if(isset($isset_val)) {
  echo "variable is set";
}
else {
 echo "variable is not set";

}


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************print_r*************************************************.
echo "<br>";
echo "print_r"; 
echo "<br>";
echo "******************";
echo "<br>"; 

$print_val = array(0,1,2,3);
print_r($print_val);

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************serialize/unserialize*************************************************.
echo "<br>";
echo "serialize and unserialize"; 
echo "<br>";
echo "******************";
echo "<br>"; 


$serialize_var = array('colour'=>'blue', 'animal'=>'tiger', 'food'=>'fish');
$output_ser = serialize($serialize_var);
echo $output_ser;
echo "<br>";
$output_unser = unserialize($output_ser);
print_r($output_unser);


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************settype*************************************************.
echo "<br>";
echo "settype"; 
echo "<br>";
echo "******************";
echo "<br>";


$int_set = "2square";
$val1=2; 

$op = settype($int_set, "integer");
echo $op+$val1; 
echo "<br>";

$int_string = '5hello';
$op_str = settype($int_string, "string");
echo $op_str;


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************strval*************************************************.
echo "<br>";
echo "strval"; 
echo "<br>";
echo "******************";
echo "<br>";


$strval_float = 23.22000;
echo strval($strval_float); echo "<br>";

$strval_string = 'hello12';
echo strval($strval_string); echo "<br>";

$strval_arr = array(1,2);
echo strval($strval_arr);



echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************unset*************************************************.
echo "<br>";
echo "unset"; 
echo "<br>";
echo "******************";
echo "<br>";

$unset_var = 'hello';

function des($unset_var){
  echo $unset_var;  echo "<br>";
  unset($unset_var); 
  echo $unset_var .'-'. "no value";
}

des($unset_var);


echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************var_dump*************************************************.
echo "<br>";
echo "var_dump"; 
echo "<br>";
echo "******************";
echo "<br>";

$var_dump_val = array(1,2,3);
var_dump($var_dump_val);

echo "<br>";
echo "================================================================================================";
echo "<br>";
//****************************************var_export*************************************************.
echo "<br>";
echo "var_export"; 
echo "<br>";
echo "******************";
echo "<br>";


class A { 
   public $var; 
}
$a = new A;
$a->var = 5;
var_export($a);

















 
?>
