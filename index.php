<?php
echo '<h1> this is array_sum function</h1>';
$a = array(4,5,6,7);
echo "sum(a) = " . array_sum($a) . "\n";
$b = array("a" => 1.3, "b" => 3.3, "c" => 4.4);
echo "sum(b) = " . array_sum($b) . "\n";
echo '<hr>';

echo '<h1> this is array_diff function</h1>';
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);
echo '<hr>';

echo '<h1> this is array_column function</h1>';
$records = array(
array('id' => 2135,'first_name' => 'padma','last_name' => 'moturu',),
array('id' => 3245,'first_name' => 'pranavi','last_name' => 'moturu',),
array('id' => 5342,'first_name' => 'naveen','last_name' => 'moturu',),
array('id' => 5623,'first_name' => 'rk','last_name' => 'moturu',));
$first_names= array_column($records,'first_name');
print_r($first_names);
echo '<hr>';

echo '<h1> this is array_fill function</h1>';
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);
echo '<hr>';

echo '<h1> this is array_count_values function</h1>';
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
echo '<hr>';

echo '<h1> this is array_merge function</h1>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo '<hr>';

echo '<h1> this is array_push function</h1>';
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo '<hr>';

echo '<h1> this is array_multisort functio</h1>';
$ar1 = array(1, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);
var_dump($ar1);
var_dump($ar2);
echo '<hr>';

echo '<h1> this is array_replace function</h1>';
$base = array("nyc", "tenali", "hyderabad", "angalakuduru");
$replacements = array(0 => "kurnool", 4 => "kearny");
$replacements2 = array(0 => "holland");
$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
echo '<hr>';

echo '<h1> this is array_combine function</h1>';
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
echo '<hr>';
print_r($c);

echo '<h1> this is count_chars function</h1>';
$data = "hello world.";
foreach (count_chars($data, 1) as $i => $val) {
echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
echo '<hr>';
}
echo '<h1> this is addslashes function</h1>';
$str = "Is your name moturu'pranavi" ;
echo addslashes($str);
echo '<hr>';
echo '<h1> this is implode function</h1>';
$array = array('pranavi', 'pm487@njit.edu', '9959079156');
$comma_separated = implode(",", $array);
echo $comma_separated; 
echo '<hr>';

echo '<h1> this is explode function</h1>';
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; 
echo $pieces[1]; 
echo '<hr>';
 
 echo '<h1> this is lcfirst function</h1>';
 $bar = 'HELLO WORLD!';
 $bar = lcfirst($bar);
 echo $bar;
 echo '<hr>';
 
  echo '<h1> this is join function</h1>';
 $array = array('apple', 'banana', 'grape', 'orange', 'guava');    
 echo join('<br>', $array);
 echo '<hr>';
 
 echo '<h1> this is ucfirst function</h1>';
 $bar = 'hello world';
 $bar = ucfirst($bar);
 echo $bar;
 echo '<hr>';
 
 echo '<h1> this is wordwrap function</h1>';
 $why = "string functions and array functions are interesting";
 $how = wordwrap($why, 10, "<br>");
 echo $how;
 echo '<hr>';
 
 echo '<h1> this is str_repeat function</h1>';
 $repeatt = str_repeat("HI, ",5);
 echo $repeatt;
 echo '<hr>';
 
 echo '<h1> this is ucwords function</h1>';
 $what = 'this is really amazing';
 $what = ucwords($what);
 echo $what;
 echo '<hr>';
 

?>

