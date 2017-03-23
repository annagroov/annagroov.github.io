<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "annagroov@gmail.com";
$subject="Tutorial";

$body = "This is body message \n\n $request";

mail ($to,$subject,$body);

echo "Message Sent! <a href='index.html'>Click here</a> to send another message";

?>