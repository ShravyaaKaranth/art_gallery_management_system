<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
$in1 = $_REQUEST['name'];
$in2 = $_REQUEST['email'];
$in3 = $_REQUEST['phone'];

$sql = "INSERT INTO `exhib_alert` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$in1', '$in2', '$in3')";
$result = mysqli_query($conn, $sql);

$to = "$in2";
$subject = "Exhibition reminder";

$message = "<b>Bengaluru event will be held in 2 days</b>";


$header = "From:abc@somedomain.com \r\n";

$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);
echo $retval;


?>