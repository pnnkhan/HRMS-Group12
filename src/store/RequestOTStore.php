<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$DateOT=$_POST['DateOT'];
$TimeOT=$_POST['TimeOT'];

$result=$conn->execute("INSERT INTO requestot (MSR, Ngay_OT, Thoi_Gian_OT) 
     VALUES (1, '".$DateOT."', '".$TimeOT."')");

if($result) {
    header("Location: " ."../../views/admin/requestOT.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/requestOT.php?message=failed");
    die();
}

class RequestOTStore
{

}