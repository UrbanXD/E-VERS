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
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="icon" type="image/png" href="src/css/media/images/logo.png">
</head>
<body>
<!----- Menu ----->
<div style="max-height: 25vh;">
    <?php include'navigation.php'; ?>
</div>

<!----- Kezdőlap ----->
<div class="max-width" style="max-height: 75vh; position: fixed; margin: 0 0;">
    <section class="max-width flex blue-bgc" id="hungarianPoets" style="background: url('src/css/media/images/library.jpg') center no-repeat; background-size: cover;">
            <div class="eighty-width brown-bgc" style="width: inherit; height: 550px; margin: 75px auto; border: 10px #7B3F00 solid; overflow: hidden;">
                <?php
                    $nationality = "hun";
                    include'src/php/book.php'
                ?>
            </div>
    </section>
</div>
</body>
</html>