<?php
if (isset($_POST['send'])){
    $to = '1@eliottorr.com'; //going to me for testing, production will be servspec@infowest.com
    $subject = 'Message from ServiceSpecialistplumbing.com';
    $message = 'Name: ' .$_POST['name']. "r/n/r/n";
    $message = 'Email: ' .$_POST['email']. "r/n/r/n";
    $message = 'Phone Number: ' .$_POST['celnumber']."r/n/r/n";
    $message = 'Message: ' .$_POST['messagearea']. "r/n/r/n";
    $headers = "From: webmaster@servicespecialistplumbing.com\r\n";
    $headers = 'Content-Type: text/plain; charset=utf-8';

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email) {
        $headers .= "\r\nReply-To: $email";
    }

    $success = mail($to, $subject, $message, $headers, '-1@eliottorr.com');
}
?>

<div id="contact">
    <a id="contactanchor"></a>
    <?php if (isset($success) && $success) { ?>
    <p>Thank you for your message</p>
    <p>We will contact you in the next 1 to 2 business days.</p>
    <p>For sooner response, please call at: 435-680-7042</p>
<?php } else { ?> 
    <p>Error sending message</p>
    <p>For sooner response, please call at: 435-680-7042</p>
<?php } ?>
</div>