<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
$in1 = $_REQUEST['gname'];
$in2 = $_REQUEST['glocation'];
$in3 = $_REQUEST['gdate'];

$sql = "INSERT INTO `exhib` (`id`, `artgallery_name`, `event_address`, `date_of_event`) VALUES (NULL, '$in1', '$in2', '$in3')";
$result = mysqli_query($conn, $sql);
echo "wow";
/*
$to = "$in2";
$subject = "Exhibition reminder";

$message = "<b>Bengaluru event will be held in 2 days</b>";


$header = "From:abc@somedomain.com \r\n";

$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);
echo $retval;

*/
?>