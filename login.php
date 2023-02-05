
<?php
include "connect.php";
session_start();






// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{

if (isset($_POST['submit'])) {
    if ( empty($_POST['email']) || empty($_POST['password'])) {
    echo "your form is not  complete!";
    }
    else {


        $email=$_POST['email'];
        $pwd=md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$pwd'";

        $result = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($result);
         $_SESSION['status']=0;

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        $_SESSION['message'] = "Login has completed thank you!  ";
        $row = $result->fetch_assoc();
        $_SESSION['username']=$row["username"];
        $_SESSION['status']=1;
        if ($row['email'] == "admin@gmail.com") {
          header('Location: view.php');
          $_SESSION['status']=0;
        }

      }else {
        $_SESSION['message'] = "check your email and password again!";

      }
      if (isset($_SESSION['message'])) {
           echo '<script type="text/javascript">alert("Hello '.$_SESSION['username'].' ' . $_SESSION['message'] . '");
                window.location.href="index.php";
                </script>';
            unset($_SESSION['message']);


      }



    }

}
mysqli_close($conn);
}



?>
