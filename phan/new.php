<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "art_gaery_db";
$con = mysqli_connect($hostName, $userName, "", $databaseName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  else echo "yay";


$user = 'lilypichu';
$sql = "SELECT * FROM main WHERE username=$user";

$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      echo  ("fullname and description\n".$row["fullname"].$row["maindescription"]);               
   }
} else {
   printf('No record found.<br />');
}
mysqli_free_result($result);
$mysqli→close();


/*
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "art_gaery_db";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else echo "yay";
//$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
//$conn = new mysqli('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");


$uname='lilypichu';

//sql staments
$sql1 = "SELECT 'email' from 'main' where '$uname' = 'main.username'" ;
$sql2 = "SELECT fullname from main where '$uname' = main.username";
$sql3 = "SELECT maindescription from main where '$uname' = main.username";


//$sql = 'SELECT Id, art_title FROM arts';
//print out the result
$result = mysqli_query($conn, $sql2);


$sel = $conn->query("SELECT 'email' from 'main' where '$uname' = 'main.username',$conn");


if ($sel) {
    $status = 'success';
    $statusMsg = "Fileuploadedsuccessfully.";
} else {
    $statusMsg = "Fileuploadfailed,pleasetryagain.";
}
echo $statusMsg;


    // $sql2 = "SELECT * from $sql where '$in2' = logintable.pass";
    //$result2 = mysqli_query($conn, $sql2);
    //$final2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);*/
/*    session_start();
    $row = $result->fetch_assoc();
    $fullname = $row['fullname'];
    $email = $row['email'];
    $maindescription = $row['maindescription'];
    
    echo $fullname;


    //$_SESSION['$artname'] = $row['artname'];
    //$_SESSION['$artdesc'] = $row['artdesc'];
    //$_SESSION['$artimage'] = $row['artimage'];



    //new table in mysql to connect username and arrtist.html? enta like nav hage copy madidre prati time new page agat ala
    //elrige ondond table agatta?
    
    // if (file_exists('../artpage/'.$uname.".php"))
    // {
    //     header("Location: ".'../artpage/'.$uname.".php");
    // }
    
    // else
    // {
    //     echo copy('../artpage/base.php','../artpage/'.$uname.'.php');  //boom done
    //     header("Location: ".'../artpage/'.$uname.".php");

    // }




//$result2 = mysqli_query($conn, $sql);
//rep result in the form of an array
//$final = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
//print_r($final);  


*/

?>