<?php

session_start();

$_SESSION["user"] = "admin";

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$requestID=$_POST['msr'];

$result=$conn->execute("UPDATE request SET Trang_Thai = 'Request Approval' WHERE MSR = $requestID");

if($result) {
    header("Location: " ."../../views/admin/manager-request.php?message=success");
    die();
} else {
    header("Location: " ."../../views/admin/manager-request.php?message=failed");
    die();
}

class RequestDayoffStore
{

}