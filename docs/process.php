<?php

    $to = "mr3essa@gmail.com";
    $from = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';
    $from = filter_var($from, FILTER_SANITIZE_EMAIL);
    $from = str_replace(["\r", "\n"], '', $from);

    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : '';
    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : '';
    $message = isset($_REQUEST['message']) ? $_REQUEST['message'] : '';

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    $headers = "From: $from";
    $subject = "You have a message.";

    $fields = array();
    $fields["name"] = $name;
    $fields["email"] = $from;
    $fields["phone"] = $phone;
    $fields["message"] = $message;

    

    $body = "Here is what was sent:\r\n"; 

    foreach($fields as $label => $value){
        $body .= $label." : ".$value."\r\n";
    }


    $send = mail($to, $subject, $body, $headers);

?>
