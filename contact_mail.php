
<?php

if(isset($_POST['submit'])){
    sendMail();
} 

function sendMail(){

        $to = "test@gmail.com"; 
        $from = $_POST['email']; 
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $adresa = $_POST['adresa'];
        $country = $_POST['country'];
        $subject = $_POST['subject'];
        $sadrzaj = $_POST['sadrzaj'];
        $message = $fname . " " . $lname . " Subject: ". $subject . "\n\n" . $sadrzaj;

        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);

        $_SESSION['message'] = '<p>Message sent!</p>';
        message(1, $_SESSION['message']);
        unset($_SESSION['message']);

}

?>