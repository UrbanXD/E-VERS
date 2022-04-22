<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Kapcsolatok</title>
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

    <!----- Kontakt ----->
    <div style="max-height: 75vh; position: fixed;">
        <section class="max-width flex center poppins black-font" id="contact" style="background: url('src/css/media/images/bg2.jpg') center no-repeat; background-size: cover; flex-wrap: wrap;">

            <!----- Cím ----->
            <div class="text-normal bold white-font" style="margin-top: 50px;">Kapcsolatok</div>

            <!----- Leírás ----->
            <div class="text-small white-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dignissimos explicabo illo inventore ipsam quae quam quia quis ut voluptatum. Asperiores, consequuntur corporis nesciunt officia praesentium ullam. Consequatur, dolores excepturi.</div>

            <!----- Elérhetőségek ----->
            <div class="flex hundred-width center">
                <div class="thirty-width" style="flex-direction: column; margin: 35px;">

                    <!----- Helyszín ----->
                    <div class="flex" style="padding: 20px 0;">
                        <div class="white-bgc flex center text-normal" style="border-radius: 50%; min-width: 60px; height: 60px;"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text-small white-font" style="margin-left: 20px;">
                            <div class="bold blue-font" style="text-align: left;">Cím</div>
                            Poštanska 18, Senta
                        </div>
                    </div>

                    <!----- Telefon ----->
                    <div class="flex" style="padding: 20px 0;">
                        <div class="white-bgc flex center text-normal" style="border-radius: 50%; min-width: 60px; height: 60px;"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text-small white-font" style="margin-left: 20px;">
                            <div class="bold blue-font" style="text-align: left;">Telefon</div>
                            06966669
                        </div>
                    </div>

                    <!----- Email ----->
                    <div class="flex" style="padding: 20px 0;">
                        <div class="white-bgc flex center text-normal" style="border-radius: 50%; min-width: 60px; height: 60px;"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text-small white-font" style="margin-left: 20px;">
                            <div class="bold blue-font" style="text-align: left;">Email</div>
                            projekt@temporaryemail.hu
                        </div>
                    </div>
                </div>

                <!----- Kontakt form ----->
                <div class="seventy-width white-bgc" style="padding: 25px; margin: 35px;">
                    <form id="contact-form" name="contact-form" action="" method="POST">
                        <div class="black-font text-medium bold">Küldje el véleményét</div>
                        <div class="hundred-width container input-control" style="margin-top: 10px; position: relative;">
                            <input type="text" placeholder=" " id="contact-name" name="contact-name"  class="hundred-width text-small" style="margin: 10px 0; border: none; border-bottom: 2px solid #333333; outline: none; padding: 5px 0;">
                            <span class="text-small black-font bold element form-span" style="margin: 5px 0; position: absolute; left: 0; pointer-events: none; transition: 0.5s;">Teljes név</span>
                        </div>
                        <div class="hundred-width container input-control" style="margin-top: 10px; position: relative;">
                            <input type="text" placeholder=" " id="contact-email" name="contact-email" class="hundred-width text-small" style="margin: 10px 0; border: none; border-bottom: 2px solid #333333; outline: none; padding: 5px 0;">
                            <span class="text-small black-font bold element form-span" style="margin: 5px 0; position: absolute; left: 0; pointer-events: none; transition: 0.5s;">Email</span>
                        </div>
                        <div class="hundred-width input-control" style="margin-top: 10px; position: relative;">
                            Irja meg az üzenetet...
                            <textarea class="hundred-width container text-small" style="margin: 10px 0; resize: none; height: 80px;"></textarea>
                        </div>
                        <div class="hundred-width container" style="margin-top: 10px; position: relative;">
                            <input type="submit" id="contact-submit" name="contact-submit" value="Küldés" class="thirty-width text-small blue-bgc white-font" style="cursor: pointer; border: none; padding: 10px;">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
