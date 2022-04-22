<?php
    $connect = mysqli_connect('localhost', 'root', '', 'E-VERS') or die("CONNECT ERROR");
    ini_set('session.gc_maxlifetime',86400);
    session_start();
    error_reporting(0);
    $sql1    = "SELECT name FROM poets WHERE nationality = '". $nationality ."' ORDER BY name;";
    $query1 = mysqli_query($connect, $sql1);
    $book_color = array("green", "blue", "umber", "springer");
    $book_type  = array("normal", "tilted");
    $book_count = 0;
    echo "<div class='container' style='background: #7B3F00; height: 225px; margin: 25px 25px;'>";
    while($row1=mysqli_fetch_assoc($query1)){
        $book_count += 1;
        $poet = $row1["name"];
        $length = mysqli_num_rows($query1);
        $color_rand_key = array_rand($book_color);
        $type_rand_key = array_rand($book_type);
        $style = ">";
        if($book_type[$type_rand_key] == "tilted" && $length > $book_count){
            $style = " style='transform: translateY(-3px) translateX(15px) rotate(9deg); margin-right: inherit'>";
        }
        echo "<div class='book book-". $book_color[$color_rand_key] ."'". $style ."<h2 style='transform-origin: 0% 0%; transform: rotate(0.25turn) translateY(-35px);'>". $poet ."</h2></div>";
        if($book_count > 14){
            echo "</div>";
            echo "<div class='container' style='background: #A0522D; height: 225px; margin: 25px 25px;'>";
            $book_count = 0;
        }
    }
    echo"</div>";
?>