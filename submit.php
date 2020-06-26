<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){
    $headers = 'From: Elton John:\r:\n'.
            'Reply-To: andrejj1kolesnik@gmail.com\r:\n'.
            'X-Mailer: PHP/'.phpversion();
    $theme = 'new message';
    $message1 = 'data of message:\r:\n';
    $message1 .= 'Name:'.$_POST['name'].'\r:\n';
    $message1 .= 'Email:'.$_POST['email'].'\r:\n';
    $message1 .= 'Phone:'.$_POST['phone'].'\r:\n';
    $message1 .= 'Message:'.$_POST['message'].'\r:\n';
    if (mail('andrejj1kolesnik@gmail.com',$theme,$message1,$headers)) {
        header('Location: /thankyou.php');
    }else {
        header('Location:/phpp.loc');
    }
} else{
     header('Location:/phpp.loc');
}


