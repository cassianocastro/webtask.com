"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("#fc");

    form.addEventListener("submit", () => {
        let name  = document.querySelector("fieldCity");
        let state = document.querySelector("fieldState");

        if ( ! isValid(name) || ! isValid(state) )
        {
            return false;
        }

        return true;
    });
}

index();