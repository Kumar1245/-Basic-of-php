<?php

/*echo "hello world  ";


$a="Hi I m PanKaj";
$b=" and how are you"; 
echo $a.$b;*/

 
//echo strrev("hello world");
$favorite="";
switch ($favorite) {
    case 'orange':
        # code...
        echo "your favorite color is pink";
        break;
    case 'apple':
        echo "your fruit color is red";
        break;
    case 'mango':
        echo "your favorite color is yelow";
        break;
    
    default:
        # code
        echo "your frute color neighter red  yellow and black";
        break;
}
echo "<br><br>";
$car=array("bmw","Toyota","ferrari","range rover");
echo "I like ".$car[0];

echo "<br>";
$age =array("Aslam"=>"25","kamaran"=>"45","tanver"=>"33");
foreach($age as $key=>$value){
    echo "$key=$value <br>";
    
}
echo "<br><br>";
$cars=array(
    array("fearraari",22,12),
    array("bmw",8,3)
);
//echo "".$cars[0][0].",Instock:".$cars[0][1].",Sell:".$cars[0][2]"";



echo "<br><br>";


//operater in php
$a=1;
$b=0;
$c=$a && $b;//and 
$d=$a||$b; //or
$e=!$a;
$x=5;
var_dump($e);
//ternary operater
echo "<br>";
$x>3 ?$flag="yes":$flag="no";
var_dump($flag);
echo "<br>";

//assignment operor
$r=5;//simple assign
$b=6;
echo $r."\n";

$r+=$b;//add and asign
echo $r."\n";

echo "<br><br>";
$age=10;
if($age>= 18){
    echo "yesa you can vote";
}
else{
    echo "No you can not vote";
}
echo "<br><br>";
//nested if else
$ages=17;
if($age>=18){
    echo "ye you can vote";
}elseif($ages==17){
    echo "please waite one more yera";
}else{
    echo " you can not vote";
}

//Array in php 
//ype of array in php index array ,associate array, multi dimensional array
echo "<br><br>";
//index array
$name=array("Pankaj ","kumar","Singh");
$name[3]="B.tech";
echo "<pre>";
print_r($name);
echo "</pre>";
echo "<br><br>";
$fname=array(
    "fname"=>"pankaj",
     "Mname"=>"Kumar",
      "Lname"=>"Singh",
    "contact"=>array("1234567",'326437575'));
$fname["Branch"]="B.tech";
//$fname["Contact"]=123456;
echo "<pre>";
print_r($fname);
echo "</pre>"

/*
$arr3 = [1,
2,
3,
4,
5,
6,
7=>[70,
71,
72=>[710,711],
73,
74,
9];
echo "<pre>";
print_r($arr3); 
echo "</pre>";
*/

//echo ..2"<br><br>";  
//function in php 
// function greet(){
//     echo "welcome to ps gyan";
//     return;
// }
// greet();
function greet(){
    echo "hello world";
    return;

}
greet();

?>
