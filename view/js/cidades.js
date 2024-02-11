import { valueFieldIsValid as isValid } from "./functions.js";

let mainForm = document.getElementById("formCity");

mainForm.onsubmit  = function (e) {
    let nome       = document.getElementById("fieldCity");
    let estado     = document.getElementById("fieldState");
    let fieldsOkay = true;

    if ( ! isValid(nome) )
    {
        fieldsOkay = false;
    }

    if ( ! isValid(estado) )
    {
        fieldsOkay = false;
    }

    return fieldsOkay;
}