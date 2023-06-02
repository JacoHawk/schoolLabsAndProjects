<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>

<body>
    <?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'jh719d@lab.icc.edu';
$subject = 'New message from Sustainable Living website';
$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
echo '<h1 style="text-align:center;">Message sent successfully.</h1>';
} else {
    echo '<h1 style="text-align:center;">An error occurred. Please try again.</h1>';
}
?>
    <div style="text-align:center;"><a href="contact.php">Return to Contact Page</a></div>
</body>

</html>