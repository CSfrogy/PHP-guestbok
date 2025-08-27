<?php 
// You do not need to include contactform.php in index.php using require_once if the contact form submission is handled within the same index.php file or if you're using a direct form submission to contactform.php.  If your form in index.php submits to contactform.php, then contactform.php should handle the processing logic directly.  If you intend to process the form within index.php, then you would include the contactform.php logic.  However, based on the provided code, it seems like contactform.php is intended to be the direct handler.

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "bulattarbaev4@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        mail($mailTo,$txt,$headers);
        header("Location: index.php?mailsend");
    } else {
        echo "Invalid email format";
    }
}