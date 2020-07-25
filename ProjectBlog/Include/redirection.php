<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['User'])){
    header("Location: index.php");
}