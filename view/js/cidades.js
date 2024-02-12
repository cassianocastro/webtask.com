"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("#fc");

    form.addEventListener("submit", () => {
        let nome   = document.querySelector("fieldCity");
        let estado = document.querySelector("fieldState");

        if ( ! isValid(nome) || ! isValid(estado) )
        {
            return false;
        }

        return true;
    });
}

index();