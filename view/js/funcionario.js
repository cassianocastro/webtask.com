"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("employeeForm");

    form.addEventListener("submit", () => {
        let nome      = form.querySelector("input[name=employee\[name\]]");
        let matricula = form.querySelector("input[name=employee\[registration\]]");
        let admissao  = form.querySelector("input[name=employee\[admission\]]");
        let salario   = form.querySelector("input[name=employee\[wage\]]");
        let filhos    = form.querySelector("input[name=employee\[sons\]]");
        let cargo     = form.querySelector("input[name=employee\[office\]]");

        let fail = ! isValid(nome)
            || ! isValid(matricula)
            || ! isValid(admissao)
            || ! isValid(salario)
            || ! isValid(filhos)
            || ! isValid(cargo)
        ;

        if ( fail )
        {
            return false;
        }

        return true;
    });
}

index();