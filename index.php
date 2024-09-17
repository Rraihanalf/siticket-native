<?php
// include 'header.php';
error_reporting(0);
switch ($_GET['page']) {
default:
include "homepage.php";
break;
include "connection.php";
break;
include "getData.php";
break;
case "home";
include 'homepage.php';
break;
case "profile";
include 'profile.php';
break;
case "login";
include "login.php";
break;
}
// include 'footer.php';
?>