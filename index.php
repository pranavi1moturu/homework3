<?php
$obj=new main()
$text="Hi";
$array=array(4,5,6,7);
$array2=array("john","kevin","ron","steven");
$array1=array("john","kevin","ron");
$number=range(0,5);
echo '<h1> String Functions </h1>'
$obj->strlen($text);
$obj->firstocc($text);
$obj->printing($text);
$obj->struppercase($text);
$obj->strlowercase($text);
$obj->strrepeat($text);
$obj->remvchar($text);
$obj->substr($text);
$obj->splitcharstr($text);
$obj->replacewrdstr($text);
echo '<h1> Array Functions </h1>'
$obj->printArray($array);
$obj->lengthArray($array);
$obj->combArray($array);
$obj->compArray($array);
$obj->splitArray($array);
$obj->mergeArray($array);
$obj->sliceArray($array);
$obj->sumArray($array);
$obj->rangeArray($array);
$obj->rrArray($array);
class main
{
  echo 'Hi! I am pranavi </br>';
}
public function strlength($text)
{
 echo '<h1>length of  a string</h1>';
echo strlen($text);
echo '<hr>';
}
public function sfirstocc($text)
{
  echo'<h1> first occurence of a string</h1>';
echo($text);
echo '<hr>';
}
public function printing($text)
{
  echo'<h1> printing of a string</h1>';
print($text);
echo '<hr>';
}
public function struppercase($text)
{
  echo'<h1> uppercase of a string</h1>';
echo strtoupper($text);
echo '<hr>';
}
public function sftrlowercase($text)
{
  echo'<h1> lowercase of a string</h1>';
echo strtolower($text);
echo '<hr>';
}
public function repeatstr($text)
{
  echo'<h1> repeating a string</h1>';
echo str_repeat("hiii",13);
echo '<hr>';
}
public function remvstr($text)
{
  echo'<h1> remove characters</h1>';
echo trim($text,i);
echo '<hr>';
}
public function substr($text)
{
  echo'<h1> substring</h1>';
echo($text,4);
echo '<hr>';
}
public function splitcharstr($text)
{
  echo'<h1> splitting a string after each char</h1>';
echo chunk_split($text,1,".");
echo '<hr>';
}
public function replacewrdstr($text)
{
  echo'<h1> replacing a text</h1>';
echo str_replace("hii","hello",$text);
echo '<hr>';
}
public function printarray($array)
{
echo <h1>print an array</h1>';
print_r($array);
echo '<hr>';
}
public function lengtharray($array)
{
echo <h1>length of an array</h1>';
echo count($array);
echo '<hr>';
}
public function combarray($array,$array2)
{
echo <h1>combine array</h1>';
$c=array combine($array,$array2);
print_r($c);
echo '<hr>';
}
public function comparray($array)
{
echo <h1>compare 2 arrays</h1>';
$result=array_diff($array2,$array1);
print_r($result);
echo '<hr>';
}
public function splitarray($array)
{
echo <h1>split an array</h1>';
print_r(array_chunk($array2,2));
echo '<hr>';
}
public function merge2array($array2,$array)
{
echo <h1>merge 2 arrays</h1>';
print_r(array_merge($array2,$array));
echo '<hr>';
}
public function slicearray($array)
{
echo <h1>slicing an array</h1>';
print_r(array_slice($array2);
echo '<hr>';
}
public function sumarray($array)
{
echo <h1>sum of array</h1>';
echo array_sum($array);
echo '<hr>';
}

public function rangearray($array)
{
echo <h1>range of an array</h1>';
print_r($number);
echo '<hr>';
}
public function rrarray($array)
{
echo <h1>removing and placing element</h1>';
array_splice($array,0,2,$array2);
echo '<hr>';
}
?>

