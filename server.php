<?php
session_start();
$username="";
$email="";
$errors=array();
$errors1=array();
//connect to database
$db=mysqli_connect('localhost','root');
if(isset($_POST['register'])){
	$username=($_POST['username']);
	$gender=($_POST['gender']);
    $college_name=($_POST['college_name']);
	$city=($_POST['city']);
	$email=($_POST['email']);
	$password=($_POST['password']);
	$confirm_password=($_POST['confirm_password']);
	if(empty($username)){
		array_push($errors,"username is required");
	}
	if(empty($college_name)){
		array_push($errors,"college_name is required");
	}
	if(empty($city)){
		array_push($errors,"city is required");
	}
	if(empty($email)){
		array_push($errors,"email is required");
	}
	if(empty($password)){
		array_push($errors,"password is required");
	}
	if($password!=$confirm_password){
		array_push($errors,"2 passwords do not match");
	}
	//save data in database
	if(count($errors)==0){
		mysqli_select_db($db,'db2');
		$sql="insert into register(username,gender,college_name,city,email,password) values('$username','$gender','$college_name','$city','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['username']=$username;
		$_SESSION['success']='successfully registered';
		header('location:main1.php#login');//redirect to home page  
	}
}
if (isset($_POST['login'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];
	if(empty($user)){
		array_push($errors1, "username is required");
	}
	if(empty($pass)){
		array_push($errors1, "password is required");
	}
	if(count($errors1)==0){
		mysqli_select_db($db,'db2');
		$query="SELECT * FROM register WHERE username='$user' AND password='$pass'";
		$result=mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']=$user;
			mysqli_select_db($db,'db2');
			$table="CREATE TABLE IF NOT EXISTS $user(event_num int not null AUTO_INCREMENT,event varchar(40) UNIQUE,PRIMARY KEY(event_num)";
			mysqli_query($db,$table);


		header('location:login3.php');
		}
		else{
			array_push($errors1, "wrong username/password combination");
		}
	}
}

if(isset($_SESSION["username"])):{
	$user= $_SESSION["username"];
          if (isset($_POST['robosoccer_reg'])) {
mysqli_select_db($db,'db2');
$r="insert into $user(event) values('robosoccer')";
mysqli_query($db,$r);
}
}endif;



if(isset($_SESSION["username"])):{
	$user= $_SESSION["username"];
          if (isset($_POST['logout'])) {
    session_destroy();
	unset($_SESSION['username']);
	header("location:main1.php");
}
}endif


?>