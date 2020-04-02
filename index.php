<?php
    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='inderjitsingh.sing@gmail.com';
        $mail->Password='Fanshawecollege';

        $mail->setfrom($_POST['email'],$_POST['name']);
        $mail->addAddress('noreply@gmail.com');
        $mail->addReplyTo($_POST['email'],$_POST['name']);

        $mail->isHTML(true);
       $mail->Subject='Form Submission: '.$_POST['subject'];
        $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email :'.$_POST['email'].'<br>
        Message: '.$_POST['message'].'</h1>';

        if(!$mail->send()){
            $result="Something went wrong, Try again";

        }else{
            $result="Thanks".$_POST['name']."for contacting us. We'll get back to you soon"
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <style>
    <?php 
            include 'style.css'
        ?>
        </style>
</head>
<body>
    <h2>REACH US</h2>
    <h1><?= $result; ?></h1>
    <form action="" method="post">
        <input type="text" name="name" Placeholder="Full Name">
        <input type="text" name="email" Placeholder="Email">
        <input type="text" name="subject" Placeholder="Subject">
        <textarea name="message" Placeholder="Message"></textarea>
        <button type="submit"  name="submit">Send Mail</button>
    </form>
</body>
</html>
