"use strict";

/**
 *
 */
function index()
{
    const ballon = document.querySelector(".ballon");
    const dialog = document.querySelector("#details");
    const menu   = dialog.querySelector("#details-section aside menu");

    dialog.addEventListener("click", () => ballon.style.display = "none");

    {
        const button = menu.querySelector(":first-child > button");

        button.addEventListener("click", (e) => {

        });
    }

    {
        const button = menu.querySelector(":last-child > button");

        button.addEventListener("click", (e) => {
            e.stopImmediatePropagation();

            const styles = { display: "flex", inset: `${e.y + 20}px auto auto ${e.x + 20}px` };

            Object.assign(ballon.style, styles);
        });
    }
}

export { index };