import {valueFieldIsValid as isValid} from "./functions.js";

let mainForm = document.getElementById("districtForm");

mainForm.onsubmit  = function (e) {
    let nome       = document.getElementById("fieldDistrictName");
    let cidade     = document.getElementById("fieldCity");
    let fieldsOkay = true;

    if (! isValid(nome))
    fieldsOkay = false;

    if (! isValid(cidade))
    fieldsOkay = false;
    return fieldsOkay;
}
