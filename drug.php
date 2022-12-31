<?php

//include_once('config.php');

//if(isset($_POST['submit']))
//{

$fname = $_POST['fname'];
$drug=$_POST['drug'];
$dosage=$_POST['dosage'];
$strenght = $_POST['strenght'];
$address = $_POST['address'];

$con=new mysqli('localhost','root','','hospital');
if($con-> connect_error)
{
    die('connection failed:' .$con->connect_error);
} 
    else{
         
        $stmt=$con->prepare("insert into drugs (fname,drug,dosage,stren,address) values ('$fname','$drug','$dosage','$strenght','$address')");
        
        $stmt->execute();
        echo "Order Sucessfull...";
        $stmt->close();
        $con->close();
        
    }




//}
?> 