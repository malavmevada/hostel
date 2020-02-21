<?php 

//session_start();
	  

$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'signup');
//$sub = $_POST['sub'];


  $email= $_POST['email_id'];
  $type= $_POST['t'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT  );
  

  $s ="SELECT * FROM usersignup WHERE email_id = '$email' && password='$pass' && 
        type='$type'";


  $result =mysqli_query($con ,$s);
  if(mysqli_num_rows($result)==0){
    echo "incorrect details";
  }

  else
  {
  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
    if ($row['email_id']==$email && $row['password']==$pass && $row['type'] == 'admin') {
      echo "admin";
      header('location:home.php');
    }
    
    if ($row['email_id']==$email && $row['password']==$pass && $row['type']=='user')
     {
      echo "user";
      header('location:hello.php');
    }

  }
}
 
?>