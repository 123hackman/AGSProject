<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <title>Tableau de bord</title>
</head>
<body>
    <div class="container">
        @include('client/menue')
        <h1>Vos reservations</h1>
        @foreach ($client->publications as $publication)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Vos reservations pour {{ $publication->$etablissement->nomEtabl }}<a href="#" class="btn btn-primary float-end"></a></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Image</th>
                                    <th>Prix</th>
                                    <th>Nombre reserver</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publication->reservations as $reservation)
                                <tr class="col-md-12">
                                    <td class="col-md-3">{{ $reservation->publication->libelle }}</td>
                                    <td class="col-md-3"><img src="{{ asset('photo/publication/'.$reservation->publication->imagePath) }}" width="100px" height="100px" alt="" srcset=""></td>
                                    <td class="col-md-2">{{ $reservation->cout }}</td>
                                    <td class="col-md-2">{{ $reservation->nbrReservation }}</td>
                                    <th><a href="{{ url('supprimerPubication',['idPublication'=>$reservation->publication->id]) }}" class="btn btn-danger btn-sm">Supprimer</a></th>
                                </tr>      
                                @endforeach                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>    
</body>
</html>