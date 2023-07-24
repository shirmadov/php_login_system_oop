<?php


if( isset($_POST["submit"]) ){

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    include "../classes/dbh.php";
    include "../classes/Login.php";
    include "../classes/LoginController.php";

    $signup = new LoginController($uid, $pwd);

    $signup->loginUser();
    header("Location: ../index.php?error=none");
}