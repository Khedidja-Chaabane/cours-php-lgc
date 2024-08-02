<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire Pilote</title>
</head>
<body>
    <form action="registerPilote.php" method="get">
        <label for="">Numero Pilote</label>
        <input type="number" name="NumPil">
        <label for="">Nom Pilote</label>
        <input type="text" name="NomPil">
        <label for="">Année de naissance</label>
        <input type="number" name="NaisPil">
        <label for="">Ville</label>
        <input type="text" name="VillePil">

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>