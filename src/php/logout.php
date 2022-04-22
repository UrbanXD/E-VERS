<?php
    session_start();
    session_destroy();

    header("Location:http://localhost/E-VERS/landingPage.php");
?>