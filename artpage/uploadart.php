<?php
$conn = mysqli_connect('localhost', 'root', '', 'art_gaery_db') or die("Unable to connect to database");
session_start();
$in1 = $_POST['artname'];
$in2 = $_REQUEST['artdesc'];
$uname = $_SESSION['$uname'];


//sql staments


//$sql = 'SELECT Id, art_title FROM arts'; 

//print out the result

//$result2 = mysqli_query($conn, $sql);
//rep result in the form of an array
//$final = mysqli_fetch_all($result2, MYSQLI_ASSOC);

//free result from memory
//print_r($final);
$status = $statusMsg = '';
echo $_FILES["image"]["name"];

if (!empty($_FILES["image"]["name"])) {
    echo "first if";
    //Getfileinfo 
    $fileName = basename($_FILES["image"]["name"]);
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

    //Allowcertainfileformats 
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        //Insertimagecontentintodatabase 

        $insert = $conn->query("INSERT INTO `uploaded_art` (`id`, `artname`, `artdesc`, `artimage`, `artist_name`) VALUES (NULL, '$in1', '$in2','$imgContent','$uname') ");


        if ($insert) {
            $status = 'success';
            $statusMsg = "Fileuploadedsuccessfully.";
        } else {
            $statusMsg = "Fileuploadfailed,pleasetryagain.";
        }
    } else {
        $statusMsg = 'Sorry,onlyJPG,JPEG,PNG,&GIFfilesareallowedtoupload.';
    }
} else {
    $statusMsg = 'Please select an image file to upload.';
}


echo $statusMsg;
header("Location:" . $uname . ".php");
//echo copy('../artpage/base2.php', '../artpage/' . $uname . '.php'); //boom done