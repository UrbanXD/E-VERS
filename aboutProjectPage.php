<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Projektről</title>
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

    <!----- Projektről ----->
    <div style="max-height: 75vh; position: fixed;">
        <section class="eighty-width flex" id="aboutProject">

                <!----- Rövid leírást és egy bemutató videót tartalmazó rész ----->
                <div class="fiftyfive-width float-left" style="margin: 50px 5px;">

                    <!----- Cím ----->
                    <div class="text-medium black-font outline oswald">Az E-VERS</div>

                    <!----- Al-cím ----->
                    <div class="text-small oswald">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>

                    <!----- Leírás ----->
                    <div class="text-extra-small fuzzybubbles">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam atque dolore, dolores doloribus eveniet exercitationem harum maiores nemo nisi officia pariatur praesentium quis quisquam quos reiciendis sapiente vel veritatis.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam atque dolore, dolores doloribus eveniet exercitationem harum maiores nemo nisi officia pariatur praesentium quis quisquam quos reiciendis sapiente vel veritatis.
                    </div>

                    <!----- Közösségi oldalak ----->
                    <div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>

                    <!----- Videó ----->
                    <div style="width: 100%">
                        <video class="element" src="src/css/media/videos/video.mp4" autoplay loop muted type="mp4" width="750" height="400" style="object-fit: cover;"></video>
                        <img class="element" src="src/css/media/images/mask.jpg" width="750" height="400" style="z-index: 2; user-select: none; mix-blend-mode: screen;">
                    </div>
                </div>

                <!----- Egész oldalas logót tartalmazó rész ----->
                <div class="fourty-width float-right" style="margin: 50px 5px;">
                    <img src="src/css/media/images/logo.png" width="100%" height="600">
                </div>
        </section>
    </div>
</body>
</html>