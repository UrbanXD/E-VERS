<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="src/js/modules.js"></script>
    <script src="src/js/modules/popup.js"></script>
    <script src="src/js/modules/reglog.js"></script>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="icon" type="image/png" href="src/css/media/images/logo.png">
</head>
<body style="background: #0f4274;">
    <div style="max-height: 25vh">
        <?php include'navigation.php'; ?>
    </div>
    <div style="max-height: 75vh; position: fixed; min-width: 100%;">
        <?php include 'src/html/loginRegister.html'; ?>
    </div>
    <script>
        const manageForm = () => {
            let urlHref = window.location.href;
            let urlHashParameter = urlHref.split("#");
            console.log(window.location.href, "REGFLIED");
            switch (urlHashParameter[1]){
                case "register":
                    document.title = "Regisztracio";
                    $('#reg').removeClass("invisible");
                    $('#log').addClass("invisible");
                    console.log("REGISTR");
                    break;
                case "login":
                    document.title = "Bejelentkezes";
                    $('#reg').addClass("invisible");
                    $('#log').removeClass("invisible");
                    console.log("LOGIn");
                    break;
            }
        };
        $(document).ready (function (){
            manageForm();
        });
        $(document).on ("click", "#iha", function () {
            let urlHref = window.location.href;
            let urlHashParameter = urlHref.split("#");
            window.location.href = urlHashParameter[0] + "#login";
            manageForm();
        });
        $(document).on ("click", "#idha", function () {
            let urlHref = window.location.href;
            let urlHashParameter = urlHref.split("#");
            window.location.href = urlHashParameter[0] + "#register";
            manageForm();
        });
    </script>
    <?php include'src/php/loginRegister.php'?>
</body>
</html>