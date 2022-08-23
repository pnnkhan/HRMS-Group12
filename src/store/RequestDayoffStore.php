<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$DateOffStart=$_POST['DateOffStart'];
$DateOffEnd=$_POST['DateOffEnd'];

$result=$conn->execute("INSERT INTO requestnghi (Ngay_Bat_Dau, Ngay_Ket_Thuc) 
     VALUES ('".$DateOffStart."', '".$DateOffEnd."')");

if($result) {
    header("Location: " ."../../views/admin/requestDayoff.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/requestDayoff.php?message=failed");
    die();
}

class RequestDayoffStore
{

}