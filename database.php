<?php
session_start();
header('location:login');
$con=mysqli_connect('localhost','root');
if($con){
    echo "connection successfully";
}
else{
    echo "no connection";
}
my sqli_select_db($con,'bookfolio');
$name= $_POST['email'];
$pass= $_POST['password'];

$quer- "select * from user data where username - '$name' && password - '$pass'";
    $result= mysqli_query($con, $quer);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        echo "duplicate data";
    }
    else{
        $querr="insert into userdata(username, password) values('$name', '$pass')";
        mysqli_query($con, $querr)
    }