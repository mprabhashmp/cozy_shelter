<?php
session_start();
//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=cozyshelter', 'root', '1234');

$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_SESSION['status']))
{
  $error .= '<p class="text-danger">you need to login first</p>';
    // echo '<script type="text/javascript">alert("you need to log in first!");
    //             window.location.href="index.php";
    //             </script>';

}
else
{
 $comment_name = $_SESSION['username'];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>