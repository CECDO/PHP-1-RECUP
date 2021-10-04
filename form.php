<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
<form action="thanks.php" method="post">
    <div>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="tel" name="phone_number" id="phone">
    </div>
    <div>
        <label for="subject">Sujet</label>
        <select name="subject_message" id="subject">
            <option value="theme_1">theme 1</option>
            <option value="theme_2">theme 2</option>
            <option value="theme_3">theme 3</option>
            <option value="theme_4">theme 4</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <div class="bouton">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
    
</body>
</html>