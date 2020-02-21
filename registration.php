<?php 

session_start();

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'signup');

$email= $_POST['email_id'];
$name = $_POST['fullname'];
$pass = password_hash ($_POST['password'], PASSWORD_DEFAULT);
$pnumber=$_POST['phonenumber'];


$s ="SELECT * FROM usersignup WHERE email_id = '$email'";

$result =mysqli_query($con ,$s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "This email is already taken";
}

else
{
	$reg="INSERT INTO usersignup(email_id,fullname,password,phonenumber) VALUES ('$email','$name','$pass','$pnumber')";
	if(mysqli_query($con ,$reg))
	echo "You have successfully register";
    else
    {
    	echo "error";
    }
}
?>