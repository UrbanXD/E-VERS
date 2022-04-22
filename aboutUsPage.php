<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rólunk</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="src/js/modules.js"></script>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel="icon" type="image/png" href="src/css/media/images/logo.png">
</head>
<body>
    <!----- Menu ----->
    <div style="max-height: 25vh">
        <?php include'navigation.php'; ?>
    </div>

    <!----- Rólunk ----->
    <div style="max-height: 75vh; position: fixed; min-width: 100%;">
        <section class="max-width flex oswald" id="about-us" style="background:url('src/css/media/images/library-720P-wallpaper.jpg') center no-repeat; background-size: cover;">

                <!----- Címet tartalmazó rész ----->
                <div class="hundred-width center height-fit text-big outline white-font bold" style="margin: 25px;">E-<span>VERS</span> Csapata</div>

                <!----- Az oldal készítőiről információkat tartalmazó boxokat tartalmazó rész ----->
                <div class="flex center" style="position: absolute; margin: 175px 5px;">

                    <!----- Tóth Dávid Box ----->
                    <div class="fifty-width flex" style="margin: 0 10px;">

                        <!----- Cím rész ----->
                        <div class="center blue-bgc" style="padding: 30px 30px;">
                            <div class="center" style="margin: auto">
                                <img src="src/css/media/images/UnknownUserAvatar.png" alt="Toth David Avatar" width="150px">
                            </div>
                            <div class="text-normal" style="margin-top: 5px;">Tóth<br>Dávid</div>
                        </div>

                        <!----- Tartalom ----->
                        <div class="darkblue-bgc white-font center fuzzybubbles" style="padding: 15px 15px;">
                            <div class="text-small">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>

                    <!----- Urbán Ádám Box ----->
                    <div class="fifty-width flex" style="margin: 0 10px; transform: scaleX(-1);">

                        <!----- Cím rész ----->
                        <div class="center blue-bgc" style="padding: 30px 30px; transform: scaleX(-1);">
                            <div class="center" style="margin: auto">
                                <img src="src/css/media/images/UnknownUserAvatar.png" alt="Urban Adam Avatar" width="150px">
                            </div>
                            <div class="text-normal" style="margin-top: 5px;">Urbán<br>Ádám</div>
                        </div>

                        <!----- Tartalom ----->
                        <div class="darkblue-bgc white-font center fuzzybubbles" style="padding: 15px 15px; transform: scaleX(-1);">
                            <div class="text-small">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>
</html>