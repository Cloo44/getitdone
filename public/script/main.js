/********************************
 * FORMULAIRE PAGE NEUTRE
 *******************************/

function displayForm() {
    const newTask = document.body.querySelector('#newTask');
    const form = document.body.querySelector('#caseNeutreCreation');
    
    newTask.addEventListener("click", ()=>{
        form.style.display = "flex";
        form.style.position = "absolute";
    });
};

displayForm();

// Partie 1 : choix de tâches ponctuelles ou régulières -> action sur le <select>
function choixDateFrequence() {
    const nivPrio = document.body.querySelector('#niveauPriorite');
    const dateTask = document.body.querySelector('#dateTask');
    const labelDate = document.body.querySelector('#labelDate');
    const freqTask = document.body.querySelector('#frequencyTask');
    const labelFreq = document.body.querySelector('#labelFrequency');

    if(!nivPrio) return;

    nivPrio.addEventListener("change", ()=> {
        localStorage.setItem("Niveau de priorité", nivPrio.value);
        let valuePrio = localStorage.getItem("Niveau de priorité");

        if(valuePrio == nivPrio[nivPrio.length-1].value) {
            labelFreq.style.display = "block";
            freqTask.style.display = "block";
            labelDate.style.display = "none";
            dateTask.style.display = "none";
        } else if (valuePrio > 0 && valuePrio <= 3) {
            labelFreq.style.display = "none";
            freqTask.style.display = "none";
            labelDate.style.display = "block";
            dateTask.style.display = "block";
        }
    });
};

choixDateFrequence();

// Partie 2 : validation du formulaire
function validerFormNeutre() {
    const formTaskNeutre = document.body.querySelector('#caseNeutreCreation');
    const task = document.body.querySelector('#nomTask');
    const dateTask = document.body.querySelector('#dateTask');
    const freqTask = document.body.querySelector('#frequencyTask');

    if(!formTaskNeutre) return;

    formTaskNeutre.addEventListener("submit", function(event) {
        event.preventDefault();
        // 2.1 : enregistrement de la tâche en "bdd locale"
        localStorage.setItem("Nom de la tâche", task.value);
        localStorage.setItem("Date de la tâche", dateTask.value);
        localStorage.setItem("Fréquence de la tâche", freqTask.value);

        implementerTask();

        formTaskNeutre.style.display = "none";
        task.value ="";
        dateTask.value ="";
        freqTask.value ="";
    });
};

validerFormNeutre();

function implementerTask() {
    const task = localStorage.getItem("Nom de la tâche");
    let nivPrio = localStorage.getItem("Niveau de priorité");
    const newTask = document.createElement('li');
    const container1 = document.body.querySelector('#ulPrio');
    const container2 = document.body.querySelector('#ulPlan');
    const container3 = document.body.querySelector('#ulAtt');
    const container4 = document.body.querySelector('#ulRegu');

    newTask.innerText = task;

    if(nivPrio == 1) {
        container1.appendChild(newTask);
    } else if(nivPrio == 2) {
        container2.appendChild(newTask);
    } else if(nivPrio == 3) {
        container3.appendChild(newTask);
    } else {
        container4.appendChild(newTask);
    }  
}

/***************************************************
 * FORMULAIRE PAGES PRIORITES, PLANIFIER ET ATTENTE
 ***************************************************/

function validerFormPrio() {
    const formTaskPriorites = document.body.querySelector('#casePrioritesCreation');
    const task = document.body.querySelector('#nomTask');
    const dateTask = document.body.querySelector('#dateTask');

    if(!formTaskPriorites) return;

    formTaskPriorites.addEventListener("submit", function(event) {
        event.preventDefault();
        
        // 1. enregistrement de la tâche en "bdd locale"
        localStorage.setItem("Nom de la tâche", task.value);
        localStorage.setItem("Date de la tâche", dateTask.value);
    });
};

validerFormPrio();

function validerFormPlanifier() {
    const formTaskPlanifier = document.body.querySelector('#casePlanifierCreation');
    const task = document.body.querySelector('#nomTask');
    const dateTask = document.body.querySelector('#dateTask');

    if(!formTaskPlanifier) return;

    formTaskPlanifier.addEventListener("submit", function(event) {
        event.preventDefault();

        // 1 : enregistrement de la tâche en "bdd locale"
        localStorage.setItem("Nom de la tâche", task.value);
        localStorage.setItem("Date de la tâche", dateTask.value);
    });
};

validerFormPlanifier();

function validerFormAttente() {
    const formTaskAttente = document.body.querySelector('#caseAttenteCreation');
    const task = document.body.querySelector('#nomTask');
    const dateTask = document.body.querySelector('#dateTask');

    if(!formTaskAttente) return;

    formTaskAttente.addEventListener("submit", function(event) {
        event.preventDefault();
        // 2.1 : enregistrement de la tâche en "bdd locale"
        localStorage.setItem("Nom de la tâche", task.value);
        localStorage.setItem("Date de la tâche", dateTask.value);
    });
};

validerFormAttente();

function validerFormRegulier() {
    const formTaskRegulier = document.body.querySelector('#caseRegulierCreation');
    const task = document.body.querySelector('#nomTask');
    const freqTask = document.body.querySelector('#frequencyTask');

    if(!formTaskRegulier) return;

    formTaskRegulier.addEventListener("submit", function(event) {
        event.preventDefault();
        // 2.1 : enregistrement de la tâche en "bdd locale"
        localStorage.setItem("Nom de la tâche", task.value);
        localStorage.setItem("Fréquence de la tâche", freqTask.value);
        implementerTask();
    });
};

validerFormRegulier();