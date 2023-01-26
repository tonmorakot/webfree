<?php

  $id = $_GET["id"];

  include("../connection/connect.php");

  $sql = "delete from students where id=$id";

  if($connect->query($sql) === TRUE){
    header("Location: ../list.php");
  } else {
    echo $connect->error;
  }

?>