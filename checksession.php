<?php
session_start();
include_once "./constants.php";
const defaultLocation = 'Location: ./welcome.php';

if (!isset($_SESSION['fileID'])) {
    header(defaultLocation);
    exit;
} else {
    //let user be on the page
    $fileID = $_SESSION['fileID'];
}


