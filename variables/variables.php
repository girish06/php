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

 
?>
