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

    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $phoneNumber = $_POST['user_phone'];
    $subject = $_POST['subject-selector'];
    $message = $_POST['user_message'];

    echo 'Merci ' . $firstname . ' ' . $lastname . ' de nous avoir contacté à propos de ' . $subject . '.';
    ?>
    <br>
    <br>
    <?php
    echo 'Un de nos conseiller vous contactera soit à l\'adresse ' . $email . ' ou par téléphone au ' . $phoneNumber . ' dans les plus brefs délais pour traiter votre demande :';
    ?>
    <br>
    <br>
    <?php
    echo $message;
    ?>

</body>

</html>