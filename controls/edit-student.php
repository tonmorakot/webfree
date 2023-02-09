<?php
$id = $_POST["id"];
$s_id = $_POST["s_id"];
$s_name = $_POST["s_name"];
$s_lastname = $_POST["s_lastname"];
$s_email = $_POST["s_email"];
$s_tel = $_POST["s_tel"];
$s_line = $_POST["s_line"];
$s_addess = $_POST["s_addess"];
$s_moo = $_POST["s_moo"];
$s_road = $_POST["s_road"];
$s_province = $_POST["s_province"];
$s_amper = $_POST["s_amper"];
$s_tumbon = $_POST["s_tumbon"];
$s_post = $_POST["s_post"];
$s_day = $_POST["s_day"];
$s_month = $_POST["s_month"];
$s_year = $_POST["s_year"];

include("../connection/connect.php");

$sql = "update student set  s_id = '$s_id',s_name = '$s_name',s_lastname = '$s_lastname',s_email = '$s_email',s_tel = '$s_tel',s_line = '$s_line',s_addess = '$s_addess',s_moo = '$s_moo',s_road = '$s_road',s_province = '$s_province',s_amper = '$s_amper',s_tumbon = '$s_tumbon',s_post = '$s_post',s_day = '$s_day',s_month = '$s_month',s_year = '$s_year' where id = '$id'";

if ($connect->query($sql) === TRUE) {

  header("location: ../list.php");
  //  echo "บันทึกข้อมูลเรียบร้อยแล้ว";
} else {
  echo $connect->error;
}


?>