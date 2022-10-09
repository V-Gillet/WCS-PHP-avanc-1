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
    <form action="form.php" method="post">
        <div>
            <label for="prénom">Prénom :</label>
            <input type="text" id="prénom" name="user_firstname" required>
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" required>
        </div>
        <div>
            <label for="phone-number">Numéro de téléphone :</label>
            <input type="phone" id="phone-number" name="user_phone">
        </div>
        <div>
            <label for=" subject">Choisis un sujet:</label>
            <select id="subject" name="subject-selector">
                <option value="Finance">Finance</option>
                <option value="Ecologie">Ecologie</option>
                <option value="Magie">Magie</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $contact = array_map('trim', $_POST);
        $errors = [];

        if (empty($contact['user_firstname'])) {
            $errors[] = 'Veuillez entrer un prénom.';
        };

        if (empty($contact['user_lastname'])) {
            $errors[] = 'Veuillez entrer un nom de famille.';
        };

        if (empty($contact['user_email'])) {
            $errors[] = 'Veuillez entrer un email.';
        };

        if (empty($contact['user_phone'])) {
            $errors[] = 'Veuillez entrer un numéro de téléphone.';
        };

        if (empty($contact['subject-selector'])) {
            $errors[] = 'Veuillez choisir un sujet.';
        };

        if (empty($contact['user_message'])) {
            $errors[] = 'Veuillez saisir votre message.';
        };

        if (!filter_var($contact['user_email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Votre email est incorrect.';
        };

        if (empty($errors)) {

            header('Location: thanks.php');
        };

        echo var_dump($contact);
        echo var_dump($errors);
    }
    ?>
    <ul>
        <?php

        if (!empty($errors)) :   ?>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>

</html>