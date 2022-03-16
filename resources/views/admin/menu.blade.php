<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('gestionProfil',['idAdmin'=>$admin->id]) }}"><img class="profil" src="{{ asset('photo/profil/'.$admin->avatarAdmintPath) }}" alt="img">{{ $admin->nomAdmin }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('gestionnaire',['idAdmin'=>$admin->id]) }}">Publication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('reservation',['idAdmin'=>$admin->id]) }}">Reservation</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Comptes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="#">Etablissement</a></li>
              <li><a class="dropdown-item" href="#">Se deconnecter</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>