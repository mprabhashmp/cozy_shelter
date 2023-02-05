<?php
  include "../connect.php";
    $ids = $_GET['id'];

    $sql = "DELETE FROM shelter_form WHERE id ='$ids'";

    $result =mysqli_query($conn,$sql);

    if($result){
        
        echo '<script type="text/javascript">alert("pet Details Deleted Successfully!");
             window.location.href="../ourpets.php";
             </script>';
    }else{
      echo "ERROR:" .$sql."<br>".$conn->error;
    }

?>
