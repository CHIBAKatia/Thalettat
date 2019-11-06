<?php

    $to = "mscomagency@gmail.com";
    $from = $_REQUEST["contact_femail"];
    $name = $_REQUEST["contact_femail"];
    $headers = "From: $from";
    $subject = "Hi Megane, You have a message from" . $from;

    $fields = array();
    $fields{"First Name"} = "contact_lname";
    $fields{"Last Name"} = "contact_fname";
    $fields{"Email"} = "contact_femail";
    $fields{"Phone Name"} = "contact_fphone";
    $fields{"Message"} = "contact_fmsg";
	$fields{"Booking Date"} = "app_date";

    $body = "Here is what was sent:\n\n"; foreach($fields as $b => $a){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);
	

?>
