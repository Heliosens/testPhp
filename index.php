<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire fichier</title>
</head>
<body>
    <h1>Formulaires d'envoi de fichiers</h1>
    <h2>fichier texte</h2>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <label for="id-file">Choisissez un fichier texte</label><br>
        <input type="file" name="userFile" id="id-file"><br>
        <input type="submit" value="Envoyer">
    </form>
    <h2>fichier image</h2>
    <form action="file2.php" method="post" enctype="multipart/form-data">
        <label for="id-file">Choisissez un fichier image</label><br>
        <input type="file" name="userFile" id="id-file"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

