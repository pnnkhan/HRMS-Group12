<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$DateWTFStart=$_POST['DateWFHStart'];
$DateWFHEnd=$_POST['DateWFHEnd'];

$result=$conn->execute("INSERT INTO requestwfm (Ngay_Bat_Dau_WFH, Ngay_Ket_Thuc_WFH) 
     VALUES ('".$DateWTFStart."', '".$DateWFHEnd."')");

if($result) {
    header("Location: " ."../../views/admin/requestWFH.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/requestWFH.php?message=failed");
    die();
}

class RequestWFHStore
{

}