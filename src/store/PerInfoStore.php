<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$FullName = $_POST['fullName'];
$Gender  = $_POST['Gender'];
$Phone  = $_POST['phone'];

$result=$conn->execute("UPDATE `nhanvien` SET Ten = '$FullName', Gioi_Tinh = '$Gender', SDT = '$Phone' WHERE MSNV = 1");

if($result) {
    header("Location: " ."../../views/admin/persionnalInfo.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/persionnalInfo.php?message=failed");
    die();
}

class RequestDayoffStore
{

}