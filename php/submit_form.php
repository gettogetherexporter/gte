<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $paymentTerms = $_POST["paymentTerms"];
    $expectedPrice = $_POST["expectedPrice"];
    $emailId = $_POST["emailId"];
    $requirements = $_POST["requirements"];
    $mobileNumber = $_POST["mobileNumber"];

    // Compose the email content
    $subject = "New Form Submission";
    $message = "Product: $product\n";
    $message .= "Payment Terms: $paymentTerms\n";
    $message .= "Expected Price: $expectedPrice\n";
    $message .= "Email ID: $emailId\n";
    $message .= "Requirements: $requirements\n";
    $message .= "Mobile Number: $mobileNumber\n";

    // Send email
    $to = "your_email@example.com"; // Replace with your email address
    $headers = "From: $emailId";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
