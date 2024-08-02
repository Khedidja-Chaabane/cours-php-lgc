<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form avion</title>
</head>
<body>
<form action="registerAvion.php" method="post">
        <label for="">Numero Avion</label>
        <input type="number" name="NumAv">
        <label for="">Nom Avion</label>
        <input type="text" name="NomAv">
        <label for="">Capacité de l'avion</label>
        <input type="number" name="CapAv">
        <label for="">Ville</label>
        <input type="text" name="VilleAv">

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>