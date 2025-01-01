<?php
$to =  "honziknotfound@seznam.cz";
$subject =  $_GET["jmeno"];
$txt = $_GET["vzkaz"];
$headers = "From: automat@mezi3a5.cz" . "\r\n" ;

mail($to,$subject,$txt,$headers);

header("Location:https://www.mezi3a5.cz/honza/terapie");
?> 