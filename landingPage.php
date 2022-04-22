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
    <div style="max-height: 75vh; position: fixed; margin: 0 0;">
        <section class="max-width flex" id="intro" style="background: url('src/css/media/images/landingPageBG.jpg') center no-repeat; background-size: cover; flex-wrap: wrap;">

            <!----- Köszönést és a költők közti navigációs gombokat tartalmazó rész ----->
            <div class="col">

                <!----- Köszöntés ----->
                <div class="smooch black-font" style="margin: 200px 0 0 100px;">
                    <div class="text-medium">Jó olvasást kívan az</div>
                    <div class="text-extra-big outline white-font">E-<span>Vers</span></div>
                    <div class="text-medium">Mi egy <span class="typing bold" style="color: #0f4274;"></span> vagyunk</div>
                </div>

                <!----- Navigáció ----->
                <form id="poet_nat_menu" style="position: absolute; margin: 50px 0 0 100px;">
                    <button type="button" id="hun_nat_btn" onclick="window.location.href='hungarianPoets.php';" class="button1" style="margin-right: 50px; padding: 17px 36px;">Magyar</button>
                    <button type="button" id="eng_nat_btn" onclick="window.location.href='englishPoets.php';" class="button1" style="padding: 17px 36px;">Angol</button>
                </form>
            </div>

            <!----- Információs boxot tartalmazó rész ----->
            <div class="col">

                <!----- Box ----->
                <div class="flex white-font" style="max-height: 500px; margin: 200px 50px 0 0;">

                    <!----- Cím ----->
                    <div class="ten-width flex center vertical-write darkblue-bgc text-medium oswald">Infók</div>

                    <!----- Tartalom ----->
                    <div class="ninty-width justify blueglass-bgc text-extra-small fuzzybubbles">
                        <p style="margin: 30px 15px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc non blandit massa enim nec dui
                            nunc mattis. Tincidunt augue interdum velit euismod in. Adipiscing diam donec adipiscing
                            tristique risus nec feugiat in. Odio tempor orci dapibus ultrices in iaculis nunc sed. Pulvinar
                            pellentesque habitant morbi tristique senectus et. Nec nam aliquam sem et tortor consequat. Amet
                             nulla facilisi morbi tempus iaculis urna id volutpat. Bibendum neque egestas congue quisque
                            egestas diam in arcu. Eget velit aliquet sagittis id consectetur purus ut faucibus. Amet
                            consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Ut morbi tincidunt augue
                            interdum velit euismod in pellentesque massa. Sed risus pretium quam vulputate dignissim
                            suspendisse. Diam vel quam elementum pulvinar etiam non quam. Tellus integer feugiat scelerisque
                            varius.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>