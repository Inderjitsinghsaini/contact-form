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
    <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" Placeholder="Full Name">
        <input type="text" name="mail" Placeholder="Email">
        <input type="text" name="subject" Placeholder="Subject">
        <textarea name="message" Placeholder="Message"></textarea>
        <button type="submit"  name="submit">Send Mail</button>
    </form>
</body>
</html>
