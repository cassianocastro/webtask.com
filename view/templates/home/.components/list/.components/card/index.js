"use strict";

/**
 *
 */
function index()
{
    const dialog = document.querySelector("#details");
    const menu   = document.querySelector("#context");
    const items  = document.querySelectorAll(".item");

    for ( const item of items )
    {
        item.addEventListener("contextmenu", (e) => {
            e.preventDefault();

            const styles = { display: "flex", inset: `${e.y}px auto auto ${e.x}px` };

            Object.assign(menu.style, styles);
        });

        item.addEventListener("click", () => dialog.showModal());
    }

    document.addEventListener("click", () => menu.style.display = "none");
}

export { index };