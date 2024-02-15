"use strict";

import { index as section } from "./.components/section/index.js";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("#details");

    {
        const button = dialog.querySelector("header [title='Close']");

        button.addEventListener("click", () => dialog.removeAttribute("open"));
    }

    {
        const button = dialog.querySelector("footer [title~='Close']");

        button.addEventListener("click", () => dialog.removeAttribute("open"));
    }

    section();
}

export { index };