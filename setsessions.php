<?php
include_once "./constants.php";
session_start();

$data = file_get_contents('php://input');

//$json = json_decode($data);
//$json = json_decode($data, TRUE);

$_SESSION["fileID"]=$data;
//$_SESSION["fileID"]=$data;
session_commit();
echo $_SESSION["fileID"];
?>