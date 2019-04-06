
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
   
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new phpmailer();



    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'dhivya199627@gmail.com';
    $mail->Password = 'Dhivy@viki';
    $mail->setFrom('dhivya199627@gmail.com');
    $mail->addReplyTo('dhivya199627@gmail.com');
    $mail->addAddress($email, $fname);
  

       $mail->IsHTML(true); 
       $mail->Subject = 'Registration Form';

       $mail->Body    = "<table><tr><td><strong> First Name </strong></td><td>".$fname."<td></tr><tr><td><strong> Last Name </strong></td><td>".$lname."<td></tr><tr><td><strong>Email </strong></td><td>".$email."<td></tr><tr><td><strong> Address </strong></td><td>".$address."<td></tr><tr><td><strong> Course </strong></td><td>".$mobile."<td></tr>

       </table>";

if(!$mail->send()) 
{
     echo "Message Could not send";
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
{ ?>
    <script type="text/javascript">
        alert("Message sent successfully");
        window.location='index.php';

    </script>
    <?php     
}
?>
