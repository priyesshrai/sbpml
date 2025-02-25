<?php
// session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$companyname = filter_input(INPUT_POST, 'companyname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$designation = filter_input(INPUT_POST, 'designation', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    
    if (empty($name) || empty($companyname) || empty($designation) || empty($email) || empty($phone) || empty($message)) 
    {
        header('Location: contact-us.php?status=error');
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: contact-us.php?status=error');
        exit;
    }


    $to = 'info@shreebhawani.one'; 
    $subject = 'New Contact Enquiry from Shree Bhawani Paper Mills Website';
    $headers = "From: info@shreebhawani.one\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "New Enquiry Received:\n\n";
    $body .= "Name: $name\n";
    $body .= "Company Name: $companyname\n";
    $body .= "Designation: $designation\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: contact-us.php?status=success');
    } else {
        // error_log("Failed to send email to $to from $email");
        header('Location: contact-us.php?status=error');
    }
    exit;
} else {
    header('Location: contact-us.php');
    exit;
}
?>