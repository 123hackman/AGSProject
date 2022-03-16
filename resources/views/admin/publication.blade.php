<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/publication.css') }}">
    <link rel="stylesheet" href="{{ url('css/publicationPhoto.css') }}">
    <script src="{{ url('js/publication.js') }}" defer></script>
    <title>Document</title>
</head>
<body>
    <form action="{{ route('regist',['idAdmin'=>$Admin]) }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="progresse-bar">
            <div class="progresse" id="progresse"></div>
            <div class="progresse-step progresse-bar-active" data-title="Général"></div>
            <div class="progresse-step" data-title="Tarif/disponibiliter"></div>
            <div class="progresse-step" data-title="Services"></div>
            <div class="progresse-step" data-title="Galerie"></div>
            <div class="progresse-step" data-title="Valider"></div>
        </div>
        <div class="form-step form-step-active">
            <h2>Veillez poursuivre pour publier une annonce.</h2>
            <P>Entrez les informations relative à votre etablissement</P>
           <div class="part">
            <div>
                <strong><p class="titre">Entrez le nom de votre établissement</p></strong>
                <input name="nomEtabl" type="text" autofocus placeholder="Nom de l'hotel">
                <p class="soustitre">Ce nom sera visible par les clients</p>
                <label class="lablel" for="serviceType">Categorie service</label><br>
                <!--categorie service-->
                <select name="serviceCate" id="serviceCate">

                @foreach ( $categories as  $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nomCategorie }}</option>
                @endforeach

                </select>
                <label class="lablel" for="nbrServiceDispo">Nombre de service disponible</label><br>
                <input type="text" placeholder="Nombre de service disponible dans votre etablissement" id="nbrServiceDispo" name="nbrHbr">
            </div>
            <div>
            <strong><P class="titre">Comment vous contactez?</P></strong>
                <label class="lablel" for="nomGerant">Nom du gérant</label><br>
                <input name="nomGerant" type="text" placeholder="Nom du gérant de l'hoberge" name="nomGerant">
                <label class="lablel" for="prenomGerant">Prenom du gérant</label><br>
                <input name="prenomGerant" type="text" placeholder="Nom du gérant de l'hoberge" name="nomGerant">
                <p>Vos numeros de téléphone</p>
                <label class="lablel" for="teleGerant">Numero de telephone</label><br>
                <input type="number" name="teleGerant" id="teleGerant" placeholder="" name="telephone"><br>
                <label for="teleGerantS">Numero de telephone secondaire</label><br>
                <input type="number" placeholder=""  name="teleGerantS">
            </div>
           </div>
            <div class="part marge">
            <strong><p class="titre">Situation géographique de votre établissement</p></strong>
                <label class="lablel" for="regionPays">Pays/Region</label><br>
                <input type="text" placeholder="Pays/Region" id="regionPays" name="regionPays"><br>
                <label class="lablel" for="rue">Numero et nom de la rue</label><br>
                <input type="text" placeholder="Nom & numero rue" id="rue" name="rue"><br>
                <label class="lablel" for="adresse">Adresse</label><br>
                <input type="text" placeholder="Adresse" id="adresse" name="adresse">
                <label class="lablel" for="codePoste">Code postal</label><br>
                <input type="text" placeholder="code poste" id="codePoste" name="codePoste">
            </div>
            <a class="btn btn-continuer width-5O ml-auto" href="#">Continuer</a>
        </div>  
        <div class="form-step">
            <h2>Tarif et disponibiliter</h2>
            <P>Renseigner pour creer une annonce</P>
           <div class="part">
            <strong><P class="titre">Service</P></strong>
                <label class="lablel" for="typeService">Type de service</label><br>
                <select name="typeService" id="typeService">
                @foreach ($categories as $categorie )
                    @foreach($categorie->typeHebergements as $cate)
                    <option value="{{ $cate->libelle }}">{{ $cate->libelle }}</option>
                    @endforeach
                    @foreach($categorie->typeVoyages as $cate)
                    <option value="{{ $cate->libelle }}">{{ $cate->libelle }}</option>
                    @endforeach
                    @foreach($categorie->typeRestaurants as $cate)
                    <option value="{{ $cate->libelle }}">{{ $cate->libelle }}</option>
                    @endforeach
                @endforeach
                </select>
                <label class="lablel" for="libelle">Titre de votre annonce</label><br>
                <input name="libelle" type="text" placeholder="Nom du gérant de l'hoberge">
                <label class="descrip" for="descrip">Description</label><br>
                <textarea name="descrip" id="descrip" cols="30" rows="10"></textarea>
            </div>
           
            <div class="part marge">
            <strong><p class="titre">Literie</p></strong>
                <label class="lablel" for="">Type de lit</label><br>
                <input type="text" placeholder="//////"  name="litType"><br>
                <label class="lablel"for="nbrPl">Nombre de place</label><br>
                <input type="number" placeholder="0" id="nbrPl" name="nbrPl"><br>                
            </div>
            <div class="part marge">
                <strong><p class="titre">Tarif de base</p></strong>
                    <label class="lablel" for="tarifPers">Tarif pour une persone</label><br>
                    <input type="number" placeholder="X0F" id="tarifPers" name="tarifPers"><br>                
                </div>
            <div class="btns">
                <a class="btn btn-revenir" href="#">Revenir</a>
                <a class="btn btn-continuer" href="#">Continuer</a>
            </div>
        </div>
        </div>  
        <div class="form-step">
            <h2>Services</h2>
            <P>Liste de sujection de service disponible</P>
           <div class="part">
            <strong><P class="titre">Parking</P></strong>
                <label class="lablel" for="station">Possibiliter de stationner?</label><br>
                <select name="parking" id="station">
                    <option value="non">NON</option>
                    <option value="oui">OUI</option>
                </select>
            </div>
            <div class="part marge">
            <strong><p class="titre">Petit-dejeuner</p></strong>
                <label class="lablel" for="petitDej">Server-vous le petit dej?</label><br>
                <select name="petitDej" id="petitDej">
                    <option value="non">NON</option>
                    <option value="oui">OUI</option>
                </select>                
            </div>
            <div class="part marge">
                <strong><p class="titre">Langue</p></strong>
                    <label class="lablel" for="langue">La langue parlé dans votre etablissement</label><br>
                    <select name="langue" id="langue">
                        <option value="FRANCAIS">FRANCAIS</option>
                        <option value="ANGLAIS">ANGLAIS</option>
                        <option value="ALLEMAND">ALLEMAND</option>
                        <option value="LOCALE">LOCALE</option>
                        <option value="AUTRE">AUTRE</option>
                    </select>                
                </div>
                <div class="part marge">
                    <strong><p class="titre">Dvertissement</p></strong>
                    <label class="lablel" for="bar">Bar</label><br>
                    <select name="bar" id="bar">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select> 
                    <label class="lablel" for="jardin">Jardin</label><br>
                    <select name="jardin" id="jardin">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select> 
                    <label class="lablel" for="picine">Picine</label><br>
                    <select name="picine" id="picine">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select> 
                    <label class="lablel" for="terrasse">Terrasse</label><br>
                    <select name="terrasse" id="terrasse">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select>
                    <label class="lablel" for="climatisation">Climatisation</label><br>
                    <select name="climatisation" id="climatisation">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select> 
                    <label class="lablel" for="plage">Plage</label><br>
                    <select name="plage" id="plage">
                        <option value="non">NON</option>
                        <option value="oui">OUI</option>
                    </select>
                </div>
            <div class="btns">
                <a class="btn btn-revenir" href="#">Revenir</a>
                <a class="btn btn-continuer" href="#">Continuer</a>
            </div>
        </div>  
        <div class="form-step">
            <h2>Galerie</h2>
            <P>Ajouter au moins une photo de votre etablissement</P>
           <div class="part">
                <div class="photos">
                    <input type="file" name="file-input" id="file-input" onchange="visualiser()" accept="image/png, image/jpeg" multiple>
                    <label class="lab"for="file-input">Choisir une photo</label>
                    <p id="num-file">Aucune photo choisir</p>
                    <div id="images"></div>
                </div>
            </div>
            <div class="btns">
                <a class="btn btn-revenir" href="#">Revenir</a>
                <a class="btn btn-continuer" href="#">Continuer</a>
            </div>
           </div>
            
        </div>  
        <div class="form-step">
            <h2>Validation de la publication</h2>
            <P>Validation de la publication</P>
           <div class="part">
                <p>Votre publication est en cours de traitement veillez patienté pour voir votre publication en ligne</p>
            </div>
            <button class="btn btn-continuer width-5O ml-auto" href="#">OK</button>
           </div>
            
        </div>  
    </form>
</body>
<script defer>
   const revenirBtns = document.querySelectorAll(".btn-revenir");
const continuerBtns = document.querySelectorAll(".btn-continuer");
const progresse = document.getElementById("progresse");
const formSteps = document.querySelectorAll(".form-step");
const progresseSteps = document.querySelectorAll(".progresse-step");

let formStepsNum = 0;

continuerBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum++;
        updateFormSteps();
        udapteProgresseBar();
    });
});

revenirBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        formStepsNum--;
        updateFormSteps();
        udapteProgresseBar();
    });
});

function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
            formStep.classList.remove("form-step-active");
    })
    formSteps[formStepsNum].classList.add("form-step-active");
}

function udapteProgresseBar() {
    progresseSteps.forEach((progresseStep, idx) => {
        if (idx < formStepsNum + 1) {
            progresseStep.classList.add("progresse-bar-active");
        } else {
            progresseStep.classList.remove("progresse-bar-active")
        }
    });

    const progresseActive = document.querySelectorAll(".progresse-bar-active");
    progresse.style.width = ((progresseActive.length - 1) / (progresseSteps.length - 1)) * 100 + "%";
}

//-----------------
let fileInput = document.getElementById("file-input");
let imageContent = document.getElementById("images");
let numFile = document.getElementById("num-file");

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
</script>
</html>