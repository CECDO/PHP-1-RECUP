<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remerciement</title>
</head>
<body>
    <?php
        echo "Merci $_POST[firstName] $_POST[lastName] de nous avoir contacté à propos de $_POST[subject_message]. " . "<br>"; 

        echo "Un de nos conseiller vous contactera soit à l’adresse $_POST[user_mail] ou par téléphone au $_POST[phone_number] dans les plus brefs délais pour traiter votre demande : " . "<br>";
        
        echo "$_POST[user_message]" . "<br>";
    ?>
</body>
</html>