<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email
    $to = "recipient@example.com"; // Replace with recipient's email address
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";

    // Set SMTP debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('SMTP', '<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email
    $to = "smritimahajan2301@gmail.com"; // Replace with recipient's email address
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";

    // Set SMTP debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('SMTP', 'smtp.gmail.com'); // Replace with SMTP server address
    ini_set('smtp_port', 587);


    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
        // Display any errors
        var_dump(error_get_last());
    }
}
?>
'); // Replace with SMTP server address
    ini_set('smtp_port', 25); // Replace with SMTP port number

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
        // Display any errors
        var_dump(error_get_last());
    }
}
?>

