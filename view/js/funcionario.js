"use strict";

import { valueFieldIsValid as isValid } from "./functions.js";

/**
 *
 */
function index()
{
    const form = document.getElementById("employeeForm");

    form.addEventListener("submit", () => {
        let nome       = document.getElementById("fieldName");
        let matricula  = document.getElementById("fieldMatricula");
        let admissao   = document.getElementById("fieldDate");
        let salario    = document.getElementById("fieldSalario");
        let filhos     = document.getElementById("fieldFilhos");
        let cargo      = document.getElementById("fieldCargo");

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