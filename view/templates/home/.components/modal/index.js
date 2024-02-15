"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("#details");

    {
        const button = dialog.querySelector("header [title='Close']");

        button.addEventListener("click", () => dialog.close());
    }

    {
        const button = dialog.querySelector("footer [title~='Close']");

        button.addEventListener("click", () => dialog.close());
    }
}

export { index };