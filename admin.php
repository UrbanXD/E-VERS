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
    <a class="text-normal" href='src/php/logout.php'>kijelentkezes</a>
<!----- Kezdőlap ----->
<div class="max-width" style="max-height: 75vh; position: fixed; margin: 0 0;">
    <form id="admin-book" name="admin-book" action="" method="POST">
        <div class="black-font text-medium bold center" style="margin: 20px 0;">Könyv hozzáadása!</div>
        <div class="hundred-width container input-control" style="margin-top: 10px;">
            <input type="text" placeholder=" " id="book-title" name="book-title" class="hundred-width text-small" style="margin: 10px 0; border: none; border-bottom: 2px solid #333333; outline: none; padding: 5px 0;">
            <span class="text-small black-font bold element form-span" style="margin: 5px 0; left: 0; pointer-events: none; transition: 0.5s;">Könyv címe</span>
        </div>
        <div class="hundred-width container input-control" style="margin-top: 10px;">
            <span class="text-small black-font bold element form-span" style="margin: 5px 0; left: 0; pointer-events: none; transition: 0.5s;">Szerzője</span>
            <br><br>
            <select name="select1" size=”3”>
                <option value="pc">Komplett PC</option>
                <option value="laptop">Laptop</option>
                <option value="alaplap" selected>Alaplap</option>
            </select>
        </div>
        <div class="hundred-width container input-control" style="margin-top: 10px;">
            <span class="text-small black-font bold element form-span" style="margin: 5px 0; left: 0; pointer-events: none; transition: 0.5s;">Könyv tartalma</span>
            <br>
            <textarea id="book-content" name="book-content" class="hundred-width container text-small" style="margin: 10px 0; resize: none; height: 80px;"></textarea>
        </div>
        <div class="hundred-width center container" style="margin-top: 10px;">
            <input type="submit" id="reg-submit" name="reg-submit" value="Hozzáadás" class="thirty-width text-small blue-bgc white-font" style="cursor: pointer; border: none; padding: 10px;" disabled>
        </div>
    </form>
    <br><br><br><br>
    <form id="admin-poet" name="admin-poet" action="" method="POST">
        <div class="black-font text-medium bold center" style="margin: 20px 0;">Költő hozzáadása!</div>
        <div class="hundred-width container input-control" style="margin-top: 10px;">
            <input type="text" placeholder=" " id="book-title" name="book-title" class="hundred-width text-small" style="margin: 10px 0; border: none; border-bottom: 2px solid #333333; outline: none; padding: 5px 0;">
            <span class="text-small black-font bold element form-span" style="margin: 5px 0; left: 0; pointer-events: none; transition: 0.5s;">Költő neve</span>
        </div>
        <div class="hundred-width center container" style="margin-top: 10px;">
            <input type="submit" id="poet-submit" name="poet-submit" value="Hozzáadás" class="thirty-width text-small blue-bgc white-font" style="cursor: pointer; border: none; padding: 10px;" disabled>
        </div>
    </form>
</div>
</body>
</html>