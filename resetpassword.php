<?php

session_start();


$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'signup');

if (isset($_GET["code"])) {
	$code = $_GET['code'];
echo "get:".$code;
	/*echo("cant find page");*/
}
if(isset($_POST['code_post'])){
	$code = $_POST['code_post'];
	echo "post:".$code;
}




$m="SELECT Email_id FROM resetpassword WHERE code='$code'";

$q=mysqli_query($con ,$m);	

$num = mysqli_num_rows($q);

if ($num == 0) {
	exit("1can't find page");
}




else if (isset($_POST["password"])) {
	$pw=password_hash ($_POST["password"], PASSWORD_DEFAULT);

	$row =mysqli_fetch_array($q);
	$email=$row["Email_id"];

	$query= mysqli_query($con,"UPDATE usersignup SET password='$pw' WHERE email_id=
		'$email'");

	if ($query) {
		$query = mysqli_query($con,"DELETE FROM resetpassword WHERE code='$code'");
		exit("password updated");
	}
	else
	{
		exit("something went wrong");
	}
}
?>	
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

	<input type="password" name="password" placeholder="new password">
	<br>
	<input type="submit" name="submit" value="update password">
	<input type="hidden" name="code_post" value="<?php echo $code ;?>">
	

</form>


