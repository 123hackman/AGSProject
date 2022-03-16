<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Document</title>
</head>
<body class="cardPrinc">
    <div class = "container" > 
        <h1>Votre etablissement</h1>
    <form class="cardform row g-3 needs-validation" novalidate>
        <div class="col-md-4 position-relative">
          <label for="nomEtabl" class="form-label">Nom etablissement : </label>
          <input type="text" name="nomEtabl" id="nomEtabl" value="nom" class="form-control"  required>
          <div class="invalid-tooltip">
            Svp remplissez le nom.
        </div>          
        </div>
        <div class="col-md-4 position-relative">
            <label for="nbrChambre" class="form-label">Nombre de chambre : </label>
            <input class="form-control" type="text" name="nbrChambre" id="nbrChambre" value="prenom" required>
            <div class="invalid-tooltip">
                Svp remplissez le prénom.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="categorie" class="form-label">Categorie : </label>
            <input class="form-control" type="text" name="categorie" id="categorie" value="categorie" required>
            <div class="invalid-tooltip">
                Svp remplissez le prénom.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Mettre à jour</button>
          </div>
    </form>
    <form class="cardform row g-3 needs-validation" novalidate>
        <h2>Profil Gérant</h2>
        <div class = "cardPr"> 
            <div class = "col-md-1" >
                <div class="imgProfil" >
                    <input type="file" value="" name="photoProfil" id="photoProfil">
                    <img src="#" alt="" srcset="">
                    <br>
                    <label for="photoProfil">Modifier</label>
                </div>
            </div> 
        </div> 
        <div class="col-md-4 position-relative">
          <label for="nomGerant" class="form-label">Nom gérant : </label>
          <input type="text" name="nomGerant" id="nomGerant" value="nom" class="form-control"  required>
          <div class="invalid-tooltip">
            Svp remplissez le nom.
        </div>          
        </div>
        <div class="col-md-4 position-relative">
            <label for="prenomGerant" class="form-label">Prenom gérant : </label>
            <input class="form-control" type="text" name="prenomGerant" id="prenomGerant" value="prenom" required>
            <div class="invalid-tooltip">
                Svp remplissez le prénom.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="telephoneGerant1" class="form-label">Téléphone 1 : </label>
            <input class="form-control" type="text" name="telephoneGerant1" id="telephoneGerant1" value="telephone" required>
            <div class="invalid-tooltip">
                Svp remplissez le téléphone.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="telephoneGerant2" class="form-label">Téléphone 2 : </label>
            <input class="form-control" type="text" name="telephoneGerant2" id="telephoneGerant2" value="telephone" required>
            <div class="invalid-tooltip">
                Svp remplissez le téléphone.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Mettre à jour</button>
          </div>
    </form>
    <form class="cardform row g-3 needs-validation" novalidate>
        <h2>Ville</h2>
        <div class="col-md-4 position-relative">
          <label for="nomVille" class="form-label">Nom ville : </label>
          <input type="text" name="nomVille" id="nomVille" value="nomVille" class="form-control"  required>
          <div class="invalid-tooltip">
            Svp remplissez le nom.
        </div>          
        </div>
        <div class="col-md-4 position-relative">
            <label for="codePostal" class="form-label">Code postal : </label>
            <input class="form-control" type="text" name="codePostal" id="codePostal" value="codePostal" required>
            <div class="invalid-tooltip">
                Svp remplissez le code postal.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="rue" class="form-label">Rue : </label>
            <input class="form-control" type="text" name="rue" id="rue" value="rue" required>
            <div class="invalid-tooltip">
                Svp remplissez le nom rue.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="adresse" class="form-label">Adresse : </label>
            <input class="form-control" type="text" name="adresse" id="adresse" value="adresse" required>
            <div class="invalid-tooltip">
                Svp remplissez le téléphone.
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Mettre à jour</button>
          </div>
    </form>
    </div>
</body>
</html>