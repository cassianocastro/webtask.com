"use strict";

/**
 *
 */
function index()
{
    const menu  = document.querySelector("#context");
    const items = document.querySelectorAll(".item");

    for ( const item of items )
    {
        item.addEventListener("contextmenu", (e) => {
            e.preventDefault();

            const styles = { display: "flex", inset: `${e.y}px auto auto ${e.x}px` };

            Object.assign(menu.style, styles);
        });
    }

    document.addEventListener("click", () => menu.style.display = "none");
}

export { index };