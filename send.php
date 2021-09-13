<?php

$mail = $_POST['user_email'];

$phone = $_POST['user_phone'];

$to = "order@salesgenerator.pro, 
       legeret@mail.amocrm.ru"; 
/*$to .= "vostrikovisyandexru@mail.amocrm.ru";*/

$subject = "Заявка Востриков И.С."; 

$message = "E-mail:".$mail." \n"
            ."Phone:".$phone;

$headers[] = "To: <legeret@mail.amocrm.ru>";
$headers[] = "From: Востриков И.C.<vostrikov.i@mail.ru>";
$headers[] = "cc: +contact@mail.amocrm.ru";


    if(!mail($to, $subject, $message, implode("\r\n", $headers)))
         echo "error send";

?>