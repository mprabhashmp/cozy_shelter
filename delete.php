<?php
  include "connect.php";
  if(isset($_GET['id'])){
    $ids = $_GET['id'];

    $sql = "DELETE FROM shelter_form WHERE id ='$ids'";

    $result =mysqli_query($conn,$sql);

    if($result){
        // echo"Shelter Deleted Successfully!";
        // header("Location: view.php");
        echo '<script type="text/javascript">alert("pet Details Deleted Successfully!");
             window.location.href="view.php";
             </script>';
    }else{
      echo "ERROR:" .$sql."<br>".$conn->error;
    }

  }
  elseif (isset($_GET['mail'])) {
      $mail = $_GET['mail'];

      $sql1 = "DELETE FROM user WHERE email ='$mail'";
      $result1 =mysqli_query($conn,$sql1);
      if($result1){
          // echo"Shelter Deleted Successfully!";
          // header("Location: view.php");
          echo '<script type="text/javascript">alert("user details Deleted Successfully!");
               window.location.href="view.php";
               </script>';
      }else{
        echo "ERROR:" .$sql."<br>".$conn->error;
      }
  }
?>
