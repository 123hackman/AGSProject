<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/profil.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @include('admin/menu')
        <h1>Vos reservations</h1>

        @foreach ($etablissements as $etablissements)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Vos reservation pour {{ $etablissements->nomEtabl }} </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Nombre reservation</th>
                                    <th>Description reservation</th>
                                    <th>Cout</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etablissements->publications as $publications)
                                    @foreach ($publications->reservations as $reservation)
                                    <tr class="col-md-12">
                                        <td class="col-md-3">{{ $reservation->dateDebut }}</td>
                                        <td class="col-md-3">{{ $reservation->nbrReservation }}</td>
                                        <td class="col-md-3">{{ $publications->description }}</td>
                                        <td class="col-md-3">{{ $publications->cout }}</td>
                                        <th><a href="{{ url('supprimerPubication/'.$reservation->id) }}" class="btn btn-danger btn-sm">Supprimer</a></th>
                                    </tr>
                                    @endforeach      
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