<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
$in1 = $_POST['userid'];
$in2 = $_REQUEST['pass'];
//sql staments
$sql = "SELECT username from logintable where '$in1' = logintable.username and '$in2' =logintable.password";



//$sql = 'SELECT Id, art_title FROM arts';

//print out the result
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {

    // $sql2 = "SELECT * from $sql where '$in2' = logintable.pass";
    //$result2 = mysqli_query($conn, $sql2);
    //$final2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    session_start();
    $row = $result->fetch_assoc();
    $uname = $row['username'];
    $_SESSION['$uname'] = $row['username'];

    header("Location: index_artist.php");

}


//$result2 = mysqli_query($conn, $sql);
//rep result in the form of an array
//$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
//print_r($final);  



?>