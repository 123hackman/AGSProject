<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>page de reservation</title>
</head>
<body>
    <div class="container-fluid ">
       
        <div class="row mb-3 ">
           
            <div class="col-4" >
                <h3 style="margin-top:20px;">Faites votre reservation !</h3>
                <form action="{{ url('reservation', ['idPublication'=>$publication->id]) }}" method="POST" class="form-control"style="background-color: orange;">
                    @csrf
                    @if(session()->has('reserValide'))
                        <div style="{color : red}" class="alert alert-success">
                            {{ session()->get('reserValide') }}
                        </div>
                    @endif
                <label for="staticEmail" class="col-sm-2 col-form-label">Début de reservation</label>
                <br>
                <input type="date"  class="form-control " style="width: 100%;" id="staticEmail" value="Début de reservation " name="dateDebut">
                <br>
                <br>
                <br>
                <label for="staticEmail" class="col-sm-2 col-form-label">Fin de reservation</label>
                <br>
                <input type="date"  class="form-control " style="width: 100%;" id="staticEmail" value="Fin de reservation" name="dateFin">
                <br>
                <br>

                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre de reservation</label>
                <br>
                <input type="number"  class="form-control " style="width: 100%;" id="staticEmail" value="Nombre de reservation" name="nbrReservation">
                <br>
                <br>
                <button type="submit" class="reserver "style="width: 100%;background-color:blue;color:white">Réserver</button>
                </form>
            </div>
                  
            <div class="col-8" style="background-color: orange;margin-top: 20px;">
                <div class="row"style="margin-top:20px">
                    <div class="col-4">
                        <h4 style="color: blue;">{{ $publication->etablissement->nomEtabl }}</h4>
                        <h2>{{ $publication->libelle }}</h2>
                        <h4>Description</h4>
                        <p> {{ $publication->description }}</p>
                        <p>Prix : {{ $publication->prix }} X0F</p>
                        
                        <h4>Complement</h4>
                        @if ($publication->complement->parking == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Bar</span><br>
                        @endif
                        @if ($publication->complement->petitDej == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Petit dejené</span><br>
                        @endif
                        @if ($publication->complement->bar == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}"><span>Bar</span><br>
                        @endif
                        @if ($publication->complement->jardin == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Jardin</span><br>
                        @endif
                        @if ($publication->complement->picine == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Picine</span><br>
                        @endif
                        @if ($publication->complement->terrasse == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Terrasse</span><br>
                        @endif
                        @if ($publication->complement->climatisation == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Climatisation</span><br>
                        @endif
                        @if ($publication->complement->plage == 'oui')
                            <img src="{{ asset('photo/publication/valider.png') }}" alt="" srcset=""><span>Plage</span><br>
                        @endif
                    </div>
                    <div class="col-8">
                        
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="{{ asset('photo/publication/'.$publication->imagePath) }}" class="d-block w-100" alt="...">
                              </div>
                              
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>

                    </div>

                </div>

                
            </div>
                
            </div>

          </div>
          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>