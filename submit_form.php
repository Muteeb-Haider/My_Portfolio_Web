<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $budget = $_POST['budget'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];
    $heard = $_POST['heard'];
    $updates = isset($_POST['heard']) ? 'Yes' : 'No'; // Check if the checkbox is checked
    
    
    $to = 'mianmuteeb786@gmail.com'; 
     $subject = 'New Form Submission';
    $body = "Name: $name\nEmail: $email\nBudget: $budget\nInterest: $interest\nMessage: $message\nHeard from: $heard\nWants updates: $updates";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'Sorry, there was a problem sending your message.';
    }
}
?>
