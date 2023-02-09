<?php

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

$sql = "insert into student ( s_id, s_name, s_lastname, s_email, s_tel, s_line, s_addess, s_moo, s_road, s_province, s_amper, s_tumbon, s_post, s_day, s_month, s_year) 
values ('$s_id', '$s_name', '$s_lastname', '$s_email', '$s_tel', '$s_line', '$s_addess', '$s_moo', '$s_road', '$s_province', '$s_amper', '$s_tumbon', '$s_post', '$s_day', '$s_month', '$s_year')";

if ($connect->query($sql) === TRUE) {

  header("location: ../list.php");
  //  echo "บันทึกข้อมูลเรียบร้อยแล้ว";
} else {
  echo $connect->error;
}

/*
echo $s_id;
echo "<br>";
echo $s_name;
echo "<br>";
echo $s_lastname;
echo "<br>";
echo $s_email;
echo "<br>";
echo $s_tel;
echo "<br>";
echo $s_line;
echo "<br>";
echo $s_moo;
echo "<br>";
echo $s_road;
echo "<br>";
echo $s_province;
echo "<br>";
echo $s_amper;
echo "<br>";
echo $s_tumbon;
echo "<br>";
echo $s_post;
echo "<br>";
echo $s_day;
echo "<br>";
echo $s_month;
echo "<br>";
echo $s_year;
$age = 2566 - $s_year;
echo "<br>";
echo "คุณ " .$s_name. " มีอายุ " .$age." ปี";
*/
?>