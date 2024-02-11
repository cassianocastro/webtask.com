function addInvalidClassList(field, display)
{
    field.classList.add("border-danger");

    display.classList.add("invalid");
    display.classList.remove("valid");

    display.innerHTML = "Campo obrigatório!";
}

function addValidClassList(field, display)
{
    field.classList.remove("border-danger");
    field.classList.add("border-success");

    display.classList.remove("invalid");
    display.classList.add("valid");

    display.innerHTML = "Campo validado!";
}

function valueFieldIsValid(field)
{
    let display = document.querySelector("#" + field.id + " + .user-feedback");

    if ( field.value === "" )
    {
        addInvalidClassList(field, display);

        return false;
    }

    addValidClassList(field, display);

    return true;
}

export { addInvalidClassList, addValidClassList, valueFieldIsValid };