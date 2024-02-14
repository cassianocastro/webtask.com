"use strict";

/**
 *
 */
function index()
{
    let zIndex = 0;

    {
        let set = document.querySelector("form fieldset:first-of-type");
        let button = document.querySelector("#employee-form aside menu > :first-child > button");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }

    {
        let set = document.querySelector("form fieldset:nth-of-type(2)");
        let button = document.querySelector("#employee-form aside menu > :nth-child(2) > button");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }

    {
        let set = document.querySelector("form fieldset:last-of-type");
        let button = document.querySelector("#employee-form aside menu > :last-child > button");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }
}

export { index };