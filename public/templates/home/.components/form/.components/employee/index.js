"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("employeeForm");

    form.addEventListener("submit", () => {
        let name      = form.querySelector("input[name=employee\[name\]]");
        let register  = form.querySelector("input[name=employee\[registration\]]");
        let admission = form.querySelector("input[name=employee\[admission\]]");
        let wage      = form.querySelector("input[name=employee\[wage\]]");
        let sons      = form.querySelector("input[name=employee\[sons\]]");
        let office    = form.querySelector("input[name=employee\[office\]]");

        let fail = ! isValid(name)
            || ! isValid(register)
            || ! isValid(admission)
            || ! isValid(wage)
            || ! isValid(sons)
            || ! isValid(office)
        ;

        if ( fail )
        {
            return false;
        }

        return true;
    });
}

index();