<?php

$con = mysqli_connect('localhost:3306','root');

if($con){
	echo "We will contact you soon";
}else{
	echo "No connection";
}


mysqli_select_db($con, 'myonlinecart');

$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into  userinfodataa (user, email, mobile, comment) values 
('$name', '$email','$mobile','$comment')  ";  

echo "$query" ;

mysqli_query($con, $query);



?>