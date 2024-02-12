"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.querySelector("employeeForm");

    form.addEventListener("submit", () => {
        let nome      = form.querySelector("fieldName");
        let matricula = form.querySelector("fieldMatricula");
        let admissao  = form.querySelector("fieldDate");
        let salario   = form.querySelector("fieldSalario");
        let filhos    = form.querySelector("fieldFilhos");
        let cargo     = form.querySelector("fieldCargo");

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