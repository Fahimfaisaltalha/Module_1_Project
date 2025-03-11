<?php

echo "Please enter the number of units you have consumed : ";
$unit=(int)readline();
if($unit<=100){
    $bill=$unit*5;

}
elseif($unit<=200){
    $bill=100*5+($unit-100)*10;

}
else{
    $bill=100*5+100*10+($unit-200)*15;

}

echo "Your total Bill is: $$bill \n";
