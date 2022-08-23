<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$DeviceInfo=$_POST['DeviceName'];

$result=$conn->execute("INSERT INTO requestthietbi (Thong_Tin_Thiet_Bi) 
     VALUES ('".$DeviceInfo."')");

if($result) {
    header("Location: " ."../../views/admin/requestDevice.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/requestDevice.php?message=failed");
    die();
}

class RequestDayoffStore
{

}