"use strict";

/**
 *
 */
function index()
{
    const section  = document.querySelector("#employee-form");
    const employee = section.querySelector("form > div > :first-child");
    const address  = section.querySelector("form > div > :nth-child(2)");
    const personal = section.querySelector("form > div > :last-child");

    {
        const button = section.querySelector("button[title='Work']");

        button.addEventListener("click", () => {
            employee.style.display = "flex";
            address.style.display  = "none";
            personal.style.display = "none";
        });
    }

    {
        const button = section.querySelector("button[title='Address']");

        button.addEventListener("click", () => {
            employee.style.display = "none";
            address.style.display  = "grid";
            personal.style.display = "none";
        });
    }

    {
        const button = section.querySelector("button[title='User']");

        button.addEventListener("click", () => {
            employee.style.display = "none";
            address.style.display  = "none";
            personal.style.display = "flex";
        });
    }
}

export { index };