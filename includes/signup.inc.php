<?php

if( isset($_POST["submit"]) ){

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    include "../classes/dbh.php";
    include "../classes/Signup.php";
    include "../classes/SignupController.php";

    $signup = new SignupController($uid, $email, $pwd, $pwdRepeat);

    $signup->signupUser();
    header("Location: ../index.php?error=none");
}