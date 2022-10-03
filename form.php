<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Contact</h1>
    <form action="/thanks.php" method="post">
        <div>
            <label for="prénom">Prénom :</label>
            <input type="text" id="prénom" name="user_firstname">
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname">
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>
        <div>
            <label for="phone-number">Numéro de téléphone :</label>
            <input type="phone" id="phone-number" name="user_phone">
        </div>
        <div>
            <label for="subject">Choisis un sujet:</label>
            <select id="subject" name="subject-selector">
                <option value="Finance">Finance</option>
                <option value="Ecologie">Ecologie</option>
                <option value="Magie">Magie</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
    <?php

    ?>

</body>

</html>