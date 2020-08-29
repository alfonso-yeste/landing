<?php
include 'global.php';

function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$data = $_POST;


$modelo = @$data['modelo'];
$email = @$data['email'];
$mobile = @$data['mobile'];


$to_email = EMAIL . ', hamster@digitalhamster.com';
$subject = 'Campaña Marketing Julio Barcelona | DigitalHamster';
$message = '
E-mail: <b>'.@$email.'</b><br>
Teléfono: <b>'.@$mobile.'</b><br>
<br>
Modelo: <b>'.@$modelo.'</b> ';


$headers = 'From: '.EMAIL. "\r\n";
$headers  .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$secure_check = sanitize_my_email(EMAIL);
if ($secure_check) $secure_check = sanitize_my_email('hamster@digitalhamster.com');
if ($secure_check == false) {
    echo '<div class="alert alert-success">No se ha podido enviar, prueba enviando un e-mail a '.EMAIL.'. ¡Gracias!</div>';
} else { //send email
    if(mail($to_email, $subject, $message, $headers)){
        echo '<script>window.open(\'../gracias.php\',\'_parent\');</script>';
    }else{
      echo '<div class="alert alert-success">No se ha podido enviar, prueba enviando un e-mail a '.EMAIL.'. ¡Gracias!</div>';
    }
}

