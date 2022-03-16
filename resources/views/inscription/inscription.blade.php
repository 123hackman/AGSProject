@extends('inscription/layout')

@section('content')
<style>
    .photo {
    padding: 0;
    margin: 0;
    background-color: white;
    width: 60%;
    min-width: 300px;
    position: relative;
    margin: 50px auto;
    padding: 50px 20px;
}

input[type="file"] {
    display: none;
}

.lab {
    display: block;
    position: relative;
    background-color: rgb(247, 118, 14);
    color: white;
    font-size: 18px;
    width: 300px;
    padding: 18px 0;
    text-align: center;
    margin: auto;
    border-radius: 5px;
    cursor: pointer;
}

.photos p {
    text-align: center;
    margin: 20px 0 30px 0;
}

#images {
    width: 98%;
    position: relative;
    margin: auto;
    display: flex;
    justify-content: space-evenly;
    gap: 20px;
    flex-wrap: wrap;
}

figure {
    width: 45%;
}

img {
    width: 100%;
}

figcaption {
    text-align: center;
    font-size: 2.4vmin;
    margin-top: 0.5vmin;
}
</style>
<div class="left">
    <form action="{{ route('registerInscription',['inscrit'=>$inscrit]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h3>Inscription {{ $inscrit }} sur MANKLAKA</h3>
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" placeholder="Nom" required><br>
        <label for="prenom" >Prenom</label><br>
        <input type="text" id="prenom" name="prenom" placeholder="Prenom"required><br>
        <label for="prenom" >Date de naissance</label><br>
        <input type="date" id="dateNaissance" name="dateNaissance" placeholder="dateNaissance" required><br>
        <label for="telephone">Telephone</label><br>
        <input type="phone" id="telephone" name="telephone" placeholder="Telephone" required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <label for="mdp1">Mots de passe</label><br>
        <input type="password" id="mdp1" name="mdp1" placeholder="Mots de passe" required>
        <label for="mdp">Confirmer votre mots de passe</label><br>
        <input type="password" id="mdp" name="mdp" placeholder="Confirmer votre mots de passe" required>
        <div id="message"></div>
        <div class="part">
            <div class="photos">
                <input type="file" name="files-input" id="files-input" onchange="visualiser()" accept="image/png, image/jpeg" >
                <label class="lab"for="files-input">Choisir une photo</label>
                <p id="num-files">Aucune photo choisir</p>
                <div id="images"></div>
            </div>
        </div>
        <div class="a">
            <div id="remember">
                <i class="indicateur"></i>
            </div>
            <p>Se souvenir de moi</p>
        </div>
        <button type="submit" onclick='validerMdp()'>S'INSCRIRE</button>
    </form>
</div>
<script defer>
    //rendre l'image choisir visible
    let fileInput = document.getElementById("files-input");
    let imageContent = document.getElementById("images");
    let numFile = document.getElementById("num-files");

    function visualiser() {
        imageContent.innerHTML = "";
        numFile.textContent = `${fileInput.files.length} Photos selectionner`;

        for (i of fileInput.files) {
            let reader = new FileReader();
            let figure = document.createElement("figure");
            let figCap = document.createElement("figcaption");

            figCap.innerText = i.name;
            figure.appendChild(figCap);

            reader.onload = () => {
                let img = document.createElement("img");
                img.setAttribute("src", reader.result);
                figure.insertBefore(img, figCap);
            }
            imageContent.appendChild(figure);
            reader.readAsDataURL(i);
        }
    }

    //validation du mot de passe
    let mdp1 = document.getElementById("mdp1").value;
    let mdp = document.getElementById("mdp").value;
    let message = document.getElementById("message");

    function validerMdp(){
        
        if (mdp1.length!=0 && mdp.length!=0) {
            if (mdp1!=mdp){
                message.textContent = "Erreur les mots de passe sont sifférents";
                message.style.backgroundColor = "#f00";
            }
        }
    }

   setInterval(() => {
    let mdp1 = document.getElementById("mdp1").value;
    let mdp = document.getElementById("mdp").value;
    let message = document.getElementById("message");
    if (mdp1.length!=0) {
        if(mdp.length!=0){
            if (mdp1!=mdp){
                message.textContent = "Erreur les mots de passe sont sifférents";
                message.style.color = "rgb(247, 118, 14)";
            }else{
                message.textContent = '';
            }
        }
    }
   }, 3000);

   setInterval(() => {
       console.log("hello");
   }, 5000);

</script>
@endsection