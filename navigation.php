<?php include'src/php/loggedOrNot.php' ?>
<script>
    include('src/js/modules/menu.js');
    include("src/js/modules/clock.js");
    $(document).on ("click", "#login-btn", function (){
        let newURL = window.location.href.split("#")[0] + "#login";
        window.location.href = newURL;
        manageForm();
    });
    $(document).on ("click", "#register-btn", function (){
        let newURL = window.location.href.split("#")[0] + "#register";
        window.location.href = newURL;
        manageForm();
    });
</script>
<nav class="hundred-width oswald darkgray-bgc white-font" style="z-index: 999;">
    <div class="flex center justify-c container" style="margin: auto 0 auto 0; min-height: 170px">
        <div class="clock">
            <div class="display blue-font element" style="top: 0; left: 0; margin: 15px 15px;"></div>
        </div>
        <picture style="margin-bottom: -5px;">
            <source media="(max-width: 768px)" srcset="src/css/media/images/p1-0,75x.png">
            <source media="(max-width: 320px)" srcset="src/css/media/images/p1-0,5x.png">
            <img src="src/css/media/images/p1-normal.png" alt="POET 1">
        </picture>
        <picture style="margin-bottom: -5px;">
            <source media="(max-width: 768px)" srcset="src/css/media/images/p2-0,75x.png">
            <source media="(max-width: 320px)" srcset="src/css/media/images/p2-0,5x.png">
            <img src="src/css/media/images/p2-normal.png" alt="POET 2">
        </picture>
        <!--<picture style="margin-bottom: -5px">
             <source media="(max-width: 768px)" srcset="src/css/media/images/p3-0,75x.png">
             <source media="(max-width: 320px)" srcset="src/css/media/images/p3-0,5x.png">
             <img src="src/css/media/images/p3-normal.png" alt="POET 3">
        </picture>!-->
        <div>
            <div class="element" style="left:50%; margin-left:-62.5px; margin-top: -15px; z-index: 500;">
                <img src="src/css/media/images/logo.png" alt="E-Vers Logó" width="125px" height="175px">
            </div>
        </div>
        <div class="triangle element" style="left:50%; top: 125px; margin-left: -200px;"></div>
        <picture style="margin-bottom: -5px">
            <source media="(max-width: 768px)" srcset="src/css/media/images/p4-0,75x.png">
            <source media="(max-width: 320px)" srcset="src/css/media/images/p4-0,5x.png">
            <img src="src/css/media/images/p4-normal.png" alt="POET 4">
        </picture>
        <picture style="margin-bottom: -5px">
            <source media="(max-width: 768px)" srcset="src/css/media/images/p5-0,75x.png">
            <source media="(max-width: 320px)" srcset="src/css/media/images/p5-0,5x.png">
            <img src="src/css/media/images/p5-normal.png" alt="POET 5">
        </picture>
        <!--<img src="src/css/media/images/p6.png" alt="POET 6" width="200px" height="184px">!-->
        <div>
            <div class="element" style="top: 0; right: 0; margin: 15px 15px;">
                <?php echo $html ?>
            </div>
        </div>
    </div>
    <div id="menu-field" class="hundred-width" style="margin:0 0;padding: 10px 0;background-color: #555555; z-index: 999; min-height: 5vh;">
        <ul id="menu" class="block" style="justify-content: center; margin: 5px 0;">
            <li class="float-left">
                <div id="menu-title" class="text-normal bold white-font invisible" style="position: fixed; margin: -5px 0;">E-<span>VERS</span></div>
            </li>
            <div class="text-small" style="margin-left: 200px">
                <li id="l1" class="float-left">
                    <a href="landingPage.php" class="white-font" style="margin: 0 25px">Kezdőlap</a>
                </li>
                <li id="l2" class="float-left">
                    <a href="aboutProjectPage.php" class="white-font" style="margin: 0 25px">Projektről</a>
                </li>
                <li id="l3" class="float-left">
                    <a href="aboutUsPage.php" class="white-font" style="margin: 0 25px">Rólunk</a>
                </li>
            </div>
            <div class="text-small" style="margin-right: 200px">
                <li id="l6" class="float-right">
                    <a href="hungarianPoets.php" class="white-font" style="margin: 0 25px">Magyar Költők</a>
                </li>
                <li id="l5" class="float-right">
                    <a href="englishPoets.php" class="white-font" style="margin: 0 25px">Angol Költők</a>
                </li>
                <li id="l4" class="float-right">
                    <a href="contactPage.php" class="white-font" style="margin: 0 25px">Kapcsolat</a>
                </li>
            </div>
        </ul>
    </div>
</nav>