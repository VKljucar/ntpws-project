
<?php

if(isset($_POST['submit'])){
    sendMail();
} 

function sendMail(){



if ($_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['email'] != '' && $_POST['adresa'] != '' && $_POST['country'] != '') {
    
    $to = "kljukster3@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $first_name = $_POST['email'];
    $last_name = $_POST['adresa'];
    $first_name = $_POST['country'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.

}

else {
    unset($_SESSION['user']);
    $_SESSION['message'] = '<p>Wrong email or password!</p>';
    message(2, $_SESSION['message']);
    unset($_SESSION['message']);
}

}

?>