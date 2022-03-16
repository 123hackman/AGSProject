<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="cardPrinc">
    <div class = "container">
        <h1>Bienvenue sur votre page de profil</h1>    
    <form class="cardform row g-3 needs-validation" novalidate>
        <h2>Votre profil</h2>
        <div class = "cardPr"> 
            <div class = "col-md-1" >
                <div class="imgProfil" >
                    <input type="file" value="" name="photoProfil" id="photoProfil">
                    <img src="#" alt="" srcset="">
                    <br>
                    <label for="photoProfil"> Modifier</label>
                </div>
            </div> 
        </div> 
        <div class="col-md-4 position-relative">
          <label for="nomAdmin" class="form-label">Votre nom : </label>
          <input type="text" name="nomAdmin" id="nomAdmin" value="nom" class="form-control"  required>
          <div class="invalid-tooltip">
            Svp remplissez le nom.
        </div>          
        </div>
        <div class="col-md-4 position-relative">
            <label for="prenomAdmin" class="form-label">Votre prenom : </label>
            <input class="form-control" type="text" name="prenomAdmin" id="prenomAdmin" value="prenom" required>
            <div class="invalid-tooltip">
                Svp remplissez le prénom.
            </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="telephoneAdmin" class="form-label">Téléphone : </label>
            <input class="form-control" type="text" name="telephoneAdmin" id="telephoneAdmin" value="telephone" required>
            <div class="invalid-tooltip">
                Svp remplissez le téléphone.
            </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="mailAdmin" class="form-label">Votre mail</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            <input type="text" class="form-control" name="mailAdmin"id="mailAdmin" aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-tooltip">
              Svp remplissez le mail.
            </div>
          </div>
        </div>
        <div class="col-md-4 position-relative">
            <label for="mdpAdmin" class="form-label">Mots de passe : </label>
            <input class="form-control" type="password" name="mdpAdmin" id="mdpAdmin" value="Mdp" required>
            <div class="invalid-tooltip">
                Svp remplissez le Mdp.
            </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Mettre à jour</button>
        </div>
      </form>
    </div> 
    
</body>
</html>