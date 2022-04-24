<?php
$connect = mysqli_connect('localhost', 'root', '', 'E-VERS') or die("CONNECT ERROR");
ini_set('session.gc_maxlifetime', 86400);
session_start();
error_reporting(0);
function checkUsername($username)
{
    if (strlen($username) < 6){
        $data = array(false, "ERROR");
    } else {
        $data = array(true, "NULL");
    }
    return $data;
}

function checkEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $data = array(false, "ERROR");
    } else {
        $data = array(true, "NULL");
    }
    return $data;
}

function checkPassword($password)
{
    if (!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/", $password)) {
        $data = array(false, "ERROR");
    } else {
        $data = array(true, "NULL");
    }
    return $data;
}

function checkRPassword($password, $rpassword)
{
    if ($rpassword != $password) {
        $data = array(false, "ERROR");
    } else {
        $data = array(true, "NULL");
    }
    return $data;
}

if (isset($_POST['reg-submit'])) {
    $username       = $_POST['reg-username'];
    $email          = $_POST['reg-email'];
    $passwordValue  = $_POST['reg-password'];
    $rpasswordValue = $_POST['reg-rpassword'];
    $password       = md5($passwordValue);
    $rpassword      = md5($rpasswordValue);

    $checkUsername  = checkUsername($username);
    $checkEmail     = checkEmail($email);
    $checkPassword  = checkPassword($passwordValue);
    $checkRPassword = checkRPassword($passwordValue, $rpasswordValue);

    if ($checkUsername[0] == true && $checkEmail[0] == true && $checkPassword[0] == true && $checkRPassword[0] == true) {
        $sql1 = "SELECT *
                         FROM users
                         WHERE email = '$email'";
        $sql2 = "SELECT *
                         FROM users
                         WHERE username = '$username'";
        $query1 = mysqli_query($connect, $sql1);
        $query2 = mysqli_query($connect, $sql2);
        if ($query1->num_rows > 0) {
            #foglalt email
            echo "<script>alert('Foglalt email!');</script>";
        } else {
            #szabad email
            if ($query2->num_rows != 0) {
                #foglalt username
                echo "<script>alert('Foglalt Felhasznalonev')</script>";
            } else {
                #szabad username
                echo "<script>alert('SzabadUser')</script>";
                $sql3 = "INSERT INTO users VALUES (' ', '$username', '$email', '$password', ' ')";
                $queryinsertrow1 = mysqli_query($connect, $sql3) or die ("Error while inserting new row");
                header("Location:landingPage.php");
                exit();
            }
        }
    } else{
        $errors   = array();
        array_push($errors, $checkUsername[1], $checkEmail[1], $checkPassword[1], $checkRPassword[1]);
        $jsErrors = json_encode($errors);
        $data     = array();
        array_push($data, $username, $email);
        $jsData   = json_encode($data);
        echo "<script>manageErrors('$jsErrors', 'register', '$jsData');</script>";
    }
}
if (isset($_POST['log-submit'])) {
    $email = $_POST['log-email'];
    $passwordValue = $_POST['log-password'];
    $password = md5($passwordValue);

    $checkEmail     = checkEmail($email);
    $checkPassword  = checkPassword($passwordValue);
    if($checkEmail[0] == true && $checkPassword[0] == true){
        $sql4   = "SELECT *
                           FROM users
                           WHERE email = '$email' AND password = '$password'";
        $query4 = mysqli_query($connect, $sql4);
        if ($query4->num_rows != 0) {
            $row = mysqli_fetch_assoc($query4);
            $userid = $row['id'];
            $_SESSION['userid'] = $userid;
            $_SESSION['needLoginPopup'] = true;
            header("Location:landingPage.php");
            exit();
        } else {
            echo "<script>openModal('error', 'Sikertelen bejelentkezes', 'LOREM');</script>";
        }
    } else{
        $errors = array();
        array_push($errors, $checkEmail[1], $checkPassword[1]);
        $jsErrors = json_encode($errors);
        $data     = array();
        array_push($data, $email);
        $jsData   = json_encode($data);
        echo "<script>manageErrors('$jsErrors', 'login', '$jsData');</script>";
    }
}
?>