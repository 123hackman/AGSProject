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