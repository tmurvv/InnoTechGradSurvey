//JavaScript file

"use strict";

function throwCap() {

    const capIcon = document.querySelector("#ion-university");
    const bounce = document.querySelector("#bounce");
    const spin = document.querySelector("#spin");
    let newHeight = 42;

    capIcon.classList.remove("ion-university");
    bounce.classList.remove("bounce");
    spin.classList.remove("spin");

    capIcon.classList.add("ion-university");
    bounce.classList.add("bounce");
    spin.classList.add("spin");

}
