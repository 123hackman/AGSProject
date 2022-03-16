<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="{{ url('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
            <div class="cardB" onclick="activeOption"><div class="col">Reservation</div></div>
            <div class="cardB" onclick="activeOption"><div class="col">Publication</div> </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Vos publications <a href="#" class="btn btn-primary float-end">Ajouter une publication</a></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Image</th>
                                    <th>Prix</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publications as $publication)
                                <tr class="col-md-12">
                                    <td class="col-md-3">{{ $publication->libelle }}</td>
                                    <td class="col-md-3"><img src="{{ asset('photo/publication/'.$publication->imagePath) }}" width="70px" height="70px" alt="" srcset=""></td>
                                    <td class="col-md-3">{{ $publication->prix }}</td>
                                    <th><a href="#" class="btn btn-primary btn-sm">Voir</a></th>
                                    <th><a href="{{ url('supprimerPubication/'.$publication->id) }}" class="btn btn-danger btn-sm">Supprimer</a></th>
                                </tr>      
                                @endforeach                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script >
    let cardB = document.querySelectorAll('.cardB');

    function activeOption() {
        cardB.forEach('click', (cardb) => {
            cardb.classList.contains("active") &&
                cardb.classList.remove("active");
        });
        cardB[cardB].classList.add("active");
    }
</script>
</html>