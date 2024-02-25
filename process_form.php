<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Construct email message
    $to = 'ashishk619@gmail.com'; 
    $subject = 'Contact Form Submission from website';
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send email
    $headers = "From: $email"; // Set the sender's email as "From" in the email header
    $sent = mail($to, $subject, $email_body, $headers);

    // Check if the email was sent successfully
    if ($sent) {
        // Display success message using JavaScript
        echo '<script>';
        echo 'alert("Thank you! Your message has been sent.");';
        echo 'window.location.href = "training-details.html";'; // Redirect after showing the alert
        echo '</script>';
        exit();
    } else {
        // Display error message using JavaScript
        echo '<script>';
        echo 'alert("Oops! Something went wrong. Please try again later.");';
        echo 'window.location.href = "training-details.html";'; // Redirect after showing the alert
        echo '</script>';
        exit();
    }
}
?>
