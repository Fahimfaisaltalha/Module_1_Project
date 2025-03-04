<?php

echo "Enter the Number You want to classify :\n";
$num=(int)readline();
if($num>1){
    echo "The number you entered is positive.";  
}
elseif($num<0){
    echo "The number you entered is negative.";
}
else{
    echo "The number you entered is zero.";
}
