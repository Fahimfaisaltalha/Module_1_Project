<?php 
define("User_Name","Admin");
define("Password","123");
echo "Enter your Username : ";
$userName=readline();
echo "Enter your Password : ";
$password=readline();

if(empty($userName)||empty($password)){
    echo "You left your User_Name or Password blank";
    
}else{
    if($userName === User_Name && $password === Password){
        echo "Success ! Your Login is Successfully";
    }
    else{
        echo "Failure! Your User_Name or Password is incorrect";
    }
}