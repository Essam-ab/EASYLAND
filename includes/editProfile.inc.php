<?php
include "dbh.inc.php";
// session_start();

if (isset($_POST['profileSubmit'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $date = $_POST['dateBirth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $user = $_SESSION['userUid'];


    echo "<script>alert('it works')</script>";
    header("Location: ../edit profile.php");
    exit();
} else {
    echo "<script>alert('error clicking submit profile edition')</script>";
    header("Location: ../edit profile.php?error=submitclicked");
    exit();
}
