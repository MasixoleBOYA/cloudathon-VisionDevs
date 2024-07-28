<?php
require_once("functions.php");

$email = $_POST["email"];
$password = $_POST["password"];

if(login_user($email,$password)){
    header("Location: profile.php");
    die();
} else if(login_org($email,$password)) {
    header("Location: feed.php");
    die();
} else {
    header("Location: getStarted.php");
    die();
}