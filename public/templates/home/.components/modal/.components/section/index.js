"use strict";

/**
 *
 */
function index()
{
    const ballon = document.querySelector("#ballon");
    const dialog = document.querySelector("#details");
    const menu   = dialog.querySelector("#details-section aside menu");

    dialog.addEventListener("click", () => ballon.close());

    {
        const button = menu.querySelector(":first-child > button");

        button.addEventListener("click", (e) => {

        });
    }

    {
        const button = menu.querySelector(":last-child > button");

        button.addEventListener("click", (e) => {
            e.stopImmediatePropagation();

            ballon.show();
        });
    }
}

export { index };