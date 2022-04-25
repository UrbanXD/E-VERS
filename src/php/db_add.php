<?php
$connect = mysqli_connect('localhost', 'root', '', 'E-VERS') or die("CONNECT ERROR");
ini_set('session.gc_maxlifetime', 86400);
session_start();
error_reporting(0);
//style="white-space:pre-warp"
if (isset($_POST['poem-submit'])) {
    $title = $_POST['poem-title'];
    $poet_id = $_POST['poem-poet'];
    $content = $_POST['poem-content'];
    $sql2 = "INSERT INTO books VALUES (' ', '$poet_id', '$title', '$content')";
    $queryinsertrow1 = mysqli_query($connect, $sql2) or die ("Error while inserting new row");
}
if (isset($_POST['poet-submit'])) {
    $name = $_POST['poet-name'];
    $nat = $_POST['poet-nat'];
    $sql2 = "INSERT INTO poets VALUES (' ', '$name', '$nat')";
    $queryinsertrow1 = mysqli_query($connect, $sql2) or die ("Error while inserting new row");
}
?>

