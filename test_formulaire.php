<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <h1>Ceci est un test de serveur Apache</h1>
    <form action="submit_form.php" method="post">
        <p>
            <label for="">Votre nom : </label> <input type="text" name="nom" id="nom1"> <br>
            Veuillez saisir votre age svp <br>
            <input type="radio" name = "age" value="20"> <label for="20"> 20 ans</label> <br>
            <input type="radio" name = "age" value="30"> <label for="30"> 30 ans</label> <br>
            <input type="submit" value="Envoyer">
        </p>
    </form>
</body>
</html>