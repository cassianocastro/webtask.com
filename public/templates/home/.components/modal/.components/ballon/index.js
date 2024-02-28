"use strict";

/**
 *
 */
function index()
{
    const ballon = document.querySelector("#ballon");

    {
        const button = ballon.querySelector("[title='Close ballon']");

        button.addEventListener("click", () => ballon.close());
    }
}

export { index };