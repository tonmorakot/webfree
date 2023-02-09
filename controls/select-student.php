<?php

$id = $_POST["id"];

include("../connection/connect.php");

$sql = "select * from student where id = '$id'";
if ($connect->query($sql) === TRUE) {

  header("location: ../list.php");
  //  echo "บันทึกข้อมูลเรียบร้อยแล้ว";
} else {
  echo $connect->error;
}