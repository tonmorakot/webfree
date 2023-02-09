<?php

  $id = $_POST["id"];
  $s_id = $_POST["s_id"];
  $s_name = $_POST["s_name"];
  $s_lastname = $_POST["s_lastname"];
  $s_email = $_POST["s_email"];
  $s_tel = $_POST["s_tel"];
  $s_line = $_POST["s_line"];
  $s_address = $_POST["s_address"];
  $s_moo = $_POST["s_moo"];
  $s_road = $_POST["s_road"];
  $s_province = $_POST["s_province"];
  $s_amphoe = $_POST["s_amphoe"];
  $s_tumbon = $_POST["s_tumbon"];
  $s_post = $_POST["s_post"];
  $s_day = $_POST["s_day"];
  $s_month = $_POST["s_month"];
  $s_year = $_POST["s_year"];

  include("../connection/connect.php");

  $sql = "update students set s_id = '$s_id', s_name = '$s_name', s_lastname = '$s_lastname', s_email = '$s_email',s_tel = '$s_tel',s_line = '$s_line',s_address = '$s_address',s_moo = '$s_moo',s_road = '$s_road',s_province = '$s_province',s_amphoe = '$s_amphoe',s_tumbon = '$s_tumbon',s_post = '$s_post',s_day = '$s_day',s_month = '$s_month',s_year = '$s_year' where id = '$id'";
  
  if($connect->query($sql) === TRUE){
    header("Location: ../list.php");
    // echo "บันทึกข้อมูลเรียบร้อยแล้ว";
  } else {
    echo $connect->error;
  }

?>