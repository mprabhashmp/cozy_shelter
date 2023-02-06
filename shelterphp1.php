<?php
//validation
session_start();
require_once("connect.php");
//InvalidArgumentException
if ($_SESSION['status']) {
    

$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$fileName = basename($_FILES["image"]["name"]);

// Check if image file is a actual image or fake image
if(isset($_POST["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["image"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


if((isset($_POST['petname'])&& $_POST['age'] !='') && (isset($_POST['breed'])&& $_POST['no']&& $_POST['loc'] !=''))
{


$petname =$_POST['petname'];
$age =$_POST['age'];
$breed =$_POST['breed'];
$no =$_POST['no'];
$location =$_POST['loc'];
$pets =$_POST['pets'];
$note =$_POST['note'];
$image =$fileName;
$uname = $_SESSION['username'];


$sql="INSERT INTO shelter_form(petname, age, pets, breed, location, no, note, image,username) VALUES('$petname','$age', '$pets', '$breed', '$location','$no','$note','$image','$uname')";

if(!$result = $conn->query($sql)) {

  echo '<script language="javascript">alert("Pleace check the characters![' .$conn->error. ']");
  window.location.href="find a shelter.html";
  </script>';

}
else {

  echo '<script language="javascript">alert("Thank You!! We will contact you soon!");
  window.location.href="find a shelter.html";
  </script>';

}
}
else{
  echo '<script language="javascript">alert("All require fields must be fill!");
  window.location.href="find a shelter.html";
  </script>';
}
}
else{
    echo '<script language="javascript">alert("user must be login first!");
  window.location.href="find a shelter.html";
  </script>';
}
mysqli_close($conn);
?>
