<?php
$con = mysqli_connect('localhost','root','','onlinevotingsystem');
if(!$con){
echo "feiled to connect";die;
}

//collect info from from
$email = $_POST['Email'];
$password = $_POST['Password'];

//interact with db 
$sql = "select * from registration where emailDb = '$email' and passwordDb ='$password' ";
$res = mysqli_query($con,$sql);

$row = mysqli_num_rows($res);
if($row > 0){
    header('Location: D.php');
}
else{
    header('Location: Admin.html');
}

?>