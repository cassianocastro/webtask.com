import { valueFieldIsValid as isValid } from "./functions.js";

function valueAgeisValid(field)
{
    let display = document.querySelector("#" + field.id + " + .user-feedback");

    if ( field.value === "" )
    {
        addInvalidClassList(field, display);

        return false;
    }

    if ( field.value < 0 )
    {
        addInvalidClassList(field, display);
        alert("Campo \"idade\" não pode ter valor menor que zero.");

        return false;
    }

    addValidClassList(field, display);

    return true;
}

/**
 *
 */
function index()
{
    const form = document.querySelector("personForm");

    form.addEventListener("submit", () => {
        let name    = form.querySelector("input[name='person\[name\]']");
        let surname = form.querySelector("input[name='person\[surname\]']");
        let age     = form.querySelector("input[name='person\[age\]']");
        let sons    = form.querySelector("input[name='person\[sons\]']");

        let fail = ! valueAgeisValid(age)
            || ! isValid(name)
            || ! isValid(surname)
            || ! isValid(sons)
        ;

        if ( fail )
        {
            return false;
        }

        return true;
    });
}

index();