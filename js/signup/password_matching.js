
let password_input = document.getElementById("password");

let password_confirmation = document.getElementById("confirm-password");

function passwordMatching(){
    if(password_input.value == password_confirmation.value && password_input.value.length != 0){

        console.log("Matching");
        //TODO: se matchano mostrare magari una notifica, oppure non fare niente.
    } else {

        console.log("Not Matching");
        //TODO: se non matchano allora mostrare l'iconcina in arancione affianco all'input della password e della conferma della password.
        //TODO: però se poi la password torna a 0 caratteri, togliere l'icona.
    }
}