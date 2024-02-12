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
        let fieldsOkay = true;

        if ( ! isValid(nome) )
        {
            fieldsOkay = false;
        }

        if ( ! isValid(matricula) )
        {
            fieldsOkay = false;
        }

        if ( ! isValid(admissao) )
        {
            fieldsOkay = false;
        }

        if ( ! isValid(salario) )
        {
            fieldsOkay = false;
        }

        if ( ! isValid(filhos) )
        {
            fieldsOkay = false;
        }

        if ( ! isValid(cargo) )
        {
            fieldsOkay = false;
        }

        return fieldsOkay;
    });
}

index();