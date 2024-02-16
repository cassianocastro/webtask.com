"use strict";

/**
 *
 */
function index()
{
    let zIndex = 0;

    const section = document.querySelector("#employee-form");

    {
        const set    = section.querySelector("form > div > :first-child");
        const button = section.querySelector("button[title='Work']");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }

    {
        const set    = section.querySelector("form > div > :nth-child(2)");
        const button = section.querySelector("button[title='Address']");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }

    {
        const set    = section.querySelector("form > div > :last-child");
        const button = section.querySelector("button[title='User']");

        button.addEventListener("click", () => set.style.zIndex = ++zIndex);
    }
}

export { index };