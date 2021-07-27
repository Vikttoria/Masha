<?php
$result=0;

if(isset($_POST['numberone']) && isset($_POST['numbertwo']) && isset($_POST['sign'] )){

    $num1=$_POST['numberone'];
    $num2=$_POST['numbertwo'];
    $sing1=$_POST['sign'];

 //if(is_numeric($_POST['numberone']) && is_numeric($_POST['numbertwo'])) {
    switch($_POST['sign']){
        case '+': $result= plus($num1,$num2);
        break;
        case '-': $result= minus($num1,$num2);
        break;
        case '*': $result= multi($num1,$num2);
        break;
        case '/': $result= del($num1,$num2);
        break;
        }
 //} 

    
}

function plus(float $a, float $b): float {
    return ($a + $b);
}
function minus($a,$b){
    return ($a - $b);
}
function multi($a,$b){
    return ($a * $b);
}
function del($a,$b){
    return ($a / $b);
}
echo $result;