<?php
if(isset($_POST['submit'])) {
    //Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    
    $hairstyle = $_POST['hairstyle'];

    //Send email
    $to = 'booking@brooksandbrown.com'; //Enter your email address here
    $subject = 'New Booking Request';
    $message = "Name: $name\n\nEmail: $email\n\nCheck-In: $checkin\n\nHair Style: $hairstyle";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you for your booking. We will contact you shortly.');</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again later.');</script>";
    }
}
?>
