
<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>E-Vers</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="src/js/modules.js"></script>
    <script src="src/js/modules/typingAnimation.js"></script>
    <script src="src/js/modules/popup.js"></script>
    <script src="src/js/modules/book.js"></script>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="icon" type="image/png" href="src/css/media/images/logo.png">
</head>
<body>
<div style="max-height: 25vh;">
    <?php include'navigation.php'; ?>
</div>
<?php
$connect = mysqli_connect('localhost', 'root', '', 'E-VERS') or die("CONNECT ERROR");
ini_set('session.gc_maxlifetime',86400);
session_start();
error_reporting(0);
echo "<script>console.log('BOOK LOADingasffasf')</script>";
$poetid = $_GET["poet"];
$sql1    = "SELECT poets.name AS poet, title, content FROM books, poets WHERE books.poetid = poets.id AND poetid = ". $poetid;
$query1 = mysqli_query($connect, $sql1);
while($row1=mysqli_fetch_assoc($query1)){
    echo "<script>console.log('BOOK LOADingasffasf')</script>";
    $poet = $row1["poet"];
    $book_title = $row1["title"];
    $book_content = $row1["content"];
    echo "<div class='book blue-bgc'>";
    echo "<div id='pages' class='pages'>";
    echo "<div class='page'>Vege</div>";
    echo "<div class='page blue-bgc'><h1>".$poet."</h1><br><h1>".$book_title."</h1></div>";
    echo "<div class='page'>". $book_content ."</div>";
    echo "</div>";
    echo "</div>";
}
?>
</body>
