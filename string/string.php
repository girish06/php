<?Php

echo "addcslahes";
echo "<br>";
echo "===============";
echo "<br>";
$var = "hello world";
$output = addcslashes($var, 'l');
echo $output;

echo "<br>";
echo "==================================";
echo "<br>";

echo "addslashes";
echo "<br>";
echo "===============";
echo "<br>";
$var1 = "didn't work properly";
//$var1 = "didn\s work properly";
$output1 = addslashes($var1);
echo $output1;

?>   
