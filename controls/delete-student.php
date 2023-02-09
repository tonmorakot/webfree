<?php

$id = $_GET["id"];

include("../connection/connect.php");

$sql = "delete from student where id=$id";

if ($connect->query($sql) === TRUE) {
    header("location: ../list.php");
} else {
    echo $connect->error;
}

?>