@extends('inscription/layout')

@section('content')
        <div class="left">            
            <form action="{{ url('validerConnexion', ['con'=>$con]) }}" method="POST">
            @csrf
            @if(session()->has('statut'))
                <div style="{color : red}" class="alert alert-success">
                    {{ session()->get('statut') }}
                </div>
             @endif
                <h3>Se connecter compte {{ $con }}</h3>
                <label for="">Email</label><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <label for="">Mots de passe</label><br>
                <input type="password" name="mdp" placeholder="Mots de passe" required>
                <div class="a">
                    <div id="remember">
                        <i class="indicateur"></i>
                    </div>
                    <p>Se souvenir de moi</p>
                </div>
                <button type="submit">SE CONNECTER</button>
                <p>Vous avez pas de compte? <a href="{{ url('inscription/'.'client') }}">S'inscrire</a></p>
            </form>
        </div>
        <div class="right">
        </div>
    </div>
    <script>
        const remember = document.getElementById('remember');
        remember.onclick = function(){
            remember.classList.toggle('active')
        }
    </script>
@endsection