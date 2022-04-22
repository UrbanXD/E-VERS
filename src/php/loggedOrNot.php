<?php
    $connect = mysqli_connect('localhost', 'root', '', 'E-VERS') or die("CONNECT ERROR");
    ini_set('session.gc_maxlifetime',86400);
    session_start();
    error_reporting(0);

    $userid = $_SESSION['userid'];
    $needPopup = $_SESSION['needLoginPopup'];
    $sql1    = "SELECT *
                        FROM users
                        WHERE id = '$userid'";
    $query1 = mysqli_query($connect, $sql1);
    if($query1->num_rows != 0){
        $row1     = mysqli_fetch_assoc($query1);
        $username = $row1['username'];
        $email    = $row1['email'];
        $sql2     = "SELECT COUNT(*) AS userscount
                             FROM users";
        $query2   = mysqli_query($connect, $sql2);
        $row2     = mysqli_fetch_assoc($query2);
        $count    = $row2['userscount'];
        $html     = "Felhasználó: $username". "<br>" ."Email: $email". "<br>" ."Összes felhasználó: $count". "<br>" ."<a href='src/php/logout.php'>kijelentkezes</a>";

        if($needPopup) {
            echo "<script>openModal('success', 'Sikeres bejelentkezes');</script>";
            $_SESSION['needLoginPopup'] = false;
        }
    }
    else{
        $html = "<a href='http://localhost/E-VERS/registrationField.php#login' id='login-btn' class='white-font'>bejelentkezés</a>
                 /
                 <a href='http://localhost/E-VERS/registrationField.php#register' id='register-btn' class='white-font'>regisztráció</a>";
    }
?>