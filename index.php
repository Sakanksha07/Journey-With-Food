<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$a=$_POST['em'];
echo $a;
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sakankshadadhich@gmail.com';                 // SMTP username
    $mail->Password = 'whosaysyournotperfect';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@poornima.org', 'Mailer');
    $mail->addAddress("$a");     // Add a recipient
    //$mail->addAddress('2017pietcssakanksha092@poornima.org');               // Name is optional
    $mail->addReplyTo('2017pietcssakanksha092@poornima.org', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

   
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to Journey with Food';
    $mail->Body    = 'You have successfullt logged in on Journey with Food.Thankyou';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
    {
        $a=$_POST['un'];
$b=$_POST['em'];
$c=$_POST['p'];
$d=$_POST['dd'];
$severname="localhost";
$username="root";
$password="";
$dbname="nsp";
$conn=mysqli_connect($severname,$username,$password,$dbname);
if ($conn) 
{
    $sql="insert into user_details(`UName`,`UEmail`,`Upass`,`DOB`) values('$a','$b','$c','$d');";
    if (mysqli_query($conn,$sql)) 
    {
        session_start();
        $_SESSION["name"]=$a;$_SESSION["email"]=$b;
        header('location:new.php');
    }
    mysqli_close($conn);
}
    }
} catch (Exception $e) {
   //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    echo "<script>window.location.assign('new.php')</script>";
}
