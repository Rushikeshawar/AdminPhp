<?php

session_start();

unset($_SESSION["logged"]);

unset($_SESSION["adminname"]);
session_destroy();
/*$BackToMyPage = $_SERVER['HTTP_REFERER'];
if(isset($BackToMyPage)) {
    header('Location: '.$BackToMyPage);
} else {*/
    header('Location: login.html'); // default page

   

?>