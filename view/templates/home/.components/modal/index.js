"use strict";

import { index as section } from "./.components/section/index.js";
import { index as ballon } from "./.components/ballon/index.js";

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
    ballon();
}

export { index };