import domReady from "@roots/sage/client/dom-ready";

domReady(async () => {
   const accordions = document.querySelectorAll(".accordion--single"); 
    accordions.forEach(accordion => {
        const button = accordion.querySelector(".accordion__trigger");
        const firstElement = accordion.querySelector(".accordion__content:first-child");
        firstElement.classList.add("cursor-pointer", "select-none", 'w-full');
        firstElement.addEventListener("click", () => {
            button.classList.toggle("rotate-180");
            accordion.classList.toggle("accordion--open");
        })
        button.addEventListener("click", () => {
            button.classList.toggle("rotate-180");
            accordion.classList.toggle("accordion--open");
        })
    });
});

import.meta.webpackHot?.accept(console.error);
