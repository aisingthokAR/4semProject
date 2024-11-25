<?php
$con = mysqli_connect('localhost','root','','onlinevotingsystem');
if(!$con){
echo "feiled to connect";die;
    }
$name = $_POST['nameH'];
$email = $_POST['emailH'];
$password = $_POST['passwordH'];
$Cpassword = $_POST['CpasswordH'];
$address = $_POST['addressH'];
$bod = $_POST['BODH'];
$gender = $_POST['GenderH'];
$phone = $_POST['phoneH'];
$sql = "INSERT INTO registration(nameDb , emailDb, passwordDb, cpasswordDb, addressDb, dbDb, genderDb, phoneNoDb)  VALUES ('$name','$email', '$password', '$Cpassword','$address', '$bod', '$gender', '$phone')";

$res = mysqli_query($con, $sql);
if(!$res){
    echo "connection failed";
}
else{
    header('Location: DD.php'); 
}
?>