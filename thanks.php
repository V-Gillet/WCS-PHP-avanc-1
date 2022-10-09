<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $contact = array_map('trim', $_POST);
    echo 'Merci ' . $contact['user_firstname'] . ' ' . $$contact['user_lastname'] . ' de nous avoir contacté à propos de ' . $contact['subject-selector'] . '.';
    ?>
    <br>
    <br>
    <?php
    echo 'Un de nos conseiller vous contactera soit à l\'adresse ' . $contact['user_email'] . ' ou par téléphone au ' . $contact['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :';
    ?>
    <br>
    <br>
    <?php
    echo $contact['user_message'];
    ?>

</body>

</html>