import { valueFieldIsValid as isValid } from "./functions.js";

function valueAgeisValid(field)
{
    let display = document.querySelector("#" + field.id + " + .user-feedback");

    if ( field.value === "" )
    {
        addInvalidClassList(field, display);

        return false;
    }

    if ( field.value < 0 )
    {
        addInvalidClassList(field, display);
        alert("Campo \"idade\" não pode ter valor menor que zero.");

        return false;
    }

    addValidClassList(field, display);

    return true;
}

const form = document.getElementById("personForm");

form.onsubmit  = function (e) {
    let nome       = document.getElementById("fieldName");
    let sobrenome  = document.getElementById("fieldLastName");
    let idade      = document.getElementById("fieldAge");
    let filhos     = document.getElementById("fieldSons");

    let fail = ! isValid(nome)
        || ! isValid(sobrenome)
        || ! isValid(filhos)
        || ! valueAgeisValid(idade);

    if ( fail )
    {
        return false;
    }

    return true;
}