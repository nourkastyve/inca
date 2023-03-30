<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le debrouilalrd</title>
    <link rel="stylesheet" href="style/debrouillard.css">
</head>
<body>

    <nav>
        <h1>le debrouillard</h1><hr>
        <div class="nav">
            <a href="accueil.html">ACCUEIL</a><a href="vendre.html">VENTRE</a><a href="enregistrer.html">ENREGISTRER</a>
            <select>
                <option value="" class="opa" disabled selected>Diamant</option>
                <option value="option2"><a href="liste_commande.html">facture</a></option>
                <option value="option3"><a href="liste_diamant.html">Magasin</a></option>
              </select>
        </div><hr>
    </nav>
            <input type="search" name="search" id="">
    <div class="cont">
        <form action="" method="post">
            <label for="">Poids :   </label>
            <input type="text" name="poids" id=""><br>
            <label for="">désignation :   </label>
            <input type="text" name="designation" id=""><br>
            <label for="">Prix :   </label>
            <input type="text" name="Prix" id=""><br>
            <label for="">Quantité :   </label>
            <input type="text" name="stock" id=""><br>
            <label for="">Nom client :   </label>
            <input type="text" name="nom" id=""><br>
            <label for="">adresse :   </label>
            <input type="text" name="adresse" id=""><br>
            <div class="action">
                <input type="submit" class="bou"value="enregistrer">
                <input type="reset" class="bou"value="restaurer">
            </div>
        </form>
    </div>
</body>
</html>