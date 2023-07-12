import domReady from "@roots/sage/client/dom-ready";

domReady(async () => {
	const testimonialsBlocks = document.querySelectorAll(".testimonials");
    testimonialsBlocks.forEach(testimonials => {
        const testimonialsWrapper = testimonials.querySelector(".testimonials__wrapper");
        let blocks = testimonials.querySelectorAll(".testimonials__single");
        let blocksClone = [];
        blocks.forEach((block, index) => {
            blocksClone[index] = block.cloneNode(true);
        })

        blocksClone.forEach((block) => {
            testimonialsWrapper.appendChild(block);
        });
        blocksClone.forEach((block) => {
            testimonialsWrapper.appendChild(block);
        });

        let blocksHeight = testimonials.getBoundingClientRect().height;

        let speed = -1.5;
        let isRunning = true;
        let translate = -blocksHeight;
        setInterval(() => {
            if(window.innerWidth < 1024){
                return;
            }
            if(translate < (-blocksHeight * 2) ){
                testimonialsWrapper.classList.remove("transition-transform");
                translate = -blocksHeight;
            }else{
                testimonialsWrapper.classList.add("transition-transform");
            }

            if(isRunning){
               if(speed > -1.5){
                    speed = speed - 0.25;
                }else{
                    speed = -1.5;
                }
            }else{
                if(speed < 0){
                    speed = speed + 1;
                }else{
                    speed = 0;
                }
            }
            translate = translate + speed;
            testimonials.style.setProperty('--translate-y', translate + 'px');
        }, 100);

        testimonials.addEventListener('mouseenter', () => {
            isRunning = false;
        })
        testimonials.addEventListener('mouseleave', () => {
            isRunning = true;
        })
    });


});

import.meta.webpackHot?.accept(console.error);
