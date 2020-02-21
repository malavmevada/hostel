    <?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




$con =mysqli_connect('localhost','root','');

mysqli_select_db($con ,'signup');

$email= $_POST['email_id'];

$s ="SELECT * FROM usersignup WHERE email_id = '$email'";

$result =mysqli_query($con ,$s);

$num = mysqli_num_rows($result);

    if($num == 1)
    {
        
    if (isset($_POST["email_id"])) {
        // Instantiation and passing `true` enables exceptions
    $email= $_POST['email_id'];

    $code=uniqid(true);
    $m ="INSERT INTO resetpassword(code ,email_id) VALUES('$code','$email')";
    
    $r1=mysqli_query($con ,$m);

    if (!$r1) {
        exit("Error");
    }
    
    $mail = new PHPMailer(true);

    
    try {
        
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hostelmanagement01@gmail.com';                     // SMTP username
        $mail->Password   = 'Vgec_hostel0101';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('hostelmanagement01@gmail.com', 'Hello');
        $mail->addAddress($email);     // Add a recipient 
        $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        

        
        // Content
        $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) ."/resetpassword.php?code=$code";
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Your password reset link';
        $mail->Body    = "<h1>You requested for reset password</h1>
                              click <a href='$url'>this link</a> to do so<br>code:$code";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Reset password link has been sent to your email address';
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
       
    }

    }
    else
    {
        echo "please enter correct email address.";
    }


?>