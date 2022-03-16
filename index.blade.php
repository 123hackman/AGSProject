<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo2.jpg" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/Design/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('css/Design/home.css') }}">
    <title>MANKLAKA</title>
</head>
<body >
<!--DEBUT MENU DE NAVIGATION-->

    <nav>

        <div class="line-nav-top"></div>
        <p><a href="{{ url('/') }}">ManKlaKa</a></p>
        <ul class="left-navbar">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            <li>
                <a href="#">Nos services</a>
                <ul class="sous-menu">
                    <li><a href="{{ url('hebergement') }}">Hebergement</a></li>
                    <li><a href="{{ url('restaurant') }}">Restaurant</a></li>
                    <li><a href="{{ url('voyage') }}">Voyage</a></li>
                </ul>
            </li>
            <li><a href="#">Contacts</a></li>
        </ul>


        <ul class="right-navbar">
            <li><a href="#">Compte</a></li>
            <li>
                <a href="#">Inscription</a>
                    <ul class="sous-menu">
                        <li><a href="{{ url('inscription',['inscrit'=>"prestataire"]) }}">Administrateur</a></li>
                        <li><a href="{{ url('inscription', ['inscrit'=>"client"]) }}">Client</a></li>
                    </ul>
            
            </li>
            <li>
                <a href="#">connexion</a>
                <ul class="sous-menu">
                    <li><a href="{{ url('connexion',['con'=>"prestataire"]) }}">Administrateur</a></li>
                    <li><a href="{{ url('connexion',['con'=>"client"]) }}">Client</a></li>
                </ul>
            </li>
        </ul>
    </nav>

<!--FIN MENU DE NAVIGATION-->

<!--DEBUT DE PREMIERE DIV-->
<div>
    <div class="first-content" >
        <center><p class="welcome">{{ $titre1 }}</p></center>
    
        @foreach ($titres as $item)
            <p class="content">{{ $item }}</p>
        @endforeach

       <div class="enddiv"><a href="#" >EN SAVOIR PLUS</a></div>
    </div>


    <div class="second-content">
        
    </div>
</div>
        <div class="block-down">
        <a href="#slider">
        <img src="{{ asset('photo/publication/down.png') }}" alt="" title="scrollez vers le bas"  class="down">
        </a>
        </div>
<!--FIN DE PREMIERE DIV-->

<!--SLIDER-->



<!--SLIDER-->



<div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($publications as $publication)
    <div class="col">
        <div class="card h-100">
          <img src="{{ asset('photo/publication/'.$publication->imagePath) }}" class="card-img-top" alt="..." width="320px" height="200px">
          <div class="card-body">
            <h5 class="card-title">{{ $publication->libelle }}</h5>
            <p class="card-text">{{ $publication->description }}</p>
          </div>
          <div class="link-in-container"><a href="{{ url('voirOffre',['idPublication'=>$publication->id]) }}">Voir l'offre</a></div>
        </div>
    </div>
    @endforeach
    </div>
</div>

<!---->
    
<footer>

    
    <div class="footer">
        <div class="second-content-copy">
        
        </div>
        
        <div></div>

    </div>

    <div class="owner">
        <p>Copyright&copy;2020 - MANKLAKA - Design by AfriqueGreenSide © 2022. </p>
    </div>

</footer>


</body>
</html>