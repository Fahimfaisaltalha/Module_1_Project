<?php

define ("factor",9/5);
define ("offSet",32);

echo "Enter the Temperature Value you want to convert :";
$temperature=(float)readline();

echo  "Press 1 to Convert your temperature Celsius to Fahrenheit, Press 2 to Convert your temperature Fahrenheit to Celsius\n";
echo "Enter Your Choice :";
$choice =(int)readline();

switch ($choice){
    case 1:
        $result = ($temperature*factor)+offSet;
        echo "$temperature °C Temperature in Fahrenheit is : $result °F\n";
        break;
    case 2:
        $result = ($temperature-offSet)/factor;
        echo "$temperature °F Temperature in Celsius is : $result °C\n";
        break;

    default :
    echo "The choice you make is Invalid!";
    break;
}