<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Construct email message
    $to = 'ashishk619@gmail.com'; 
    $subject = 'Registration Details from website';
    $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nCourse: $course\nTime: $time\nMessage: $message";

    // Set the sender's email as "From" in the email header
    $headers = "From: $email";

    // Send email and check if it was sent successfully
    $sent = mail($to, $subject, $email_body, $headers);

    // Check if the email was sent successfully
    if ($sent) {
        // Alert for successful submission using JavaScript
        echo '<script>alert("Thank you! Your message has been sent.");</script>';
        // Redirect after showing the alert (optional delay added for visibility)
        echo '<script>setTimeout(function(){ window.location.href = "training-details.html"; }, 1000);</script>';
        exit();
    } else {
        // Alert for failed submission
        echo '<script>alert("Oops! Something went wrong. Please try again later.");</script>';
    }
}
?>
