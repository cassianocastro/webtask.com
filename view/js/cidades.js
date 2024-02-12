"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("#fc");

    form.addEventListener("submit", () => {
        let name  = form.querySelector("input[name='city\[name\]']");
        let state = form.querySelector("input[name='city\[state\]']");

        if ( ! isValid(name) || ! isValid(state) )
        {
            return false;
        }

        return true;
    });
}

index();