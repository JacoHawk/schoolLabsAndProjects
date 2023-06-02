<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contact.css">

    <?php
include 'header.html';
?>

    <section>
        <h2>Contact Us</h2>
        <h3 class="sub">If you'd like to contact us, please fill out the form below. This is where you can contact us
            about job openings, sign up for our newsletter, or send us any comments or concerns you may have! We love to
            hear feedback so that we can continue to improve our site and our ability to educate others.
        </h3>
        <form action="contact_form.php" method="post" id="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send" />
        </form>
    </section>

    <?php
include 'footer.html';
?>