"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("#df");

    form.addEventListener("submit", () => {
        let name = form.querySelector("input[name='district\[name\]']");
        let city = form.querySelector("input[name='district\[cityName\]']");

        if ( ! isValid(name) || ! isValid(city) )
        {
            return false;
        }

        return true;
    });
}

index();