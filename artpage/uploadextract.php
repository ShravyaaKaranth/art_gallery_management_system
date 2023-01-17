<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
$uname='shravyasama';
//sql staments
$sql1 = "SELECT * from uploaded_art where '$uname' = uploaded_art.artist_name" ;


//$sql = 'SELECT Id, art_title FROM arts';

//print out the result
$result = mysqli_query($conn, $sql1);



    // $sql2 = "SELECT * from $sql where '$in2' = logintable.pass";
    //$result2 = mysqli_query($conn, $sql2);
    //$final2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    session_start();
    $row = $result->fetch_assoc();
    $artname = $row['artname'];
    $artdesc = $row['artdesc'];
    $artimage = $row['artimage'];
    
    $convart ='<td><img src="data:image/jpeg;base64,'.base64_encode($artimage).'"/></td>';
    


    $_SESSION['$artname'] = $row['artname'];
    $_SESSION['$artdesc'] = $row['artdesc'];
    $_SESSION['$convart'] = $convart;

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



?>