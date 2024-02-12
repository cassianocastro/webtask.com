"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.getElementById("formCity");

    form.addEventListener("submit", () => {
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
    });
}

index();