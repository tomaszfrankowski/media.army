import domReady from "@roots/sage/client/dom-ready";

domReady(async () => {
	const testimonialsBlocks = document.querySelectorAll(".testimonials");
    testimonialsBlocks.forEach(testimonials => {
        const testimonialsWrapper = testimonials.querySelector(".testimonials__wrapper");
        let blocks = testimonials.querySelectorAll(".testimonials__single");
        
		const singleTestimonialsHeight= testimonialsWrapper.getBoundingClientRect().height;
				
        let blocksClone = [];
        blocks.forEach((block, index) => {
            testimonialsWrapper.appendChild(block.cloneNode(true));
        });
        blocks.forEach((block, index) => {
            testimonialsWrapper.appendChild(block.cloneNode(true));
        });
        const testimonialsHeightOffset = (singleTestimonialsHeight * 3 - testimonialsWrapper.getBoundingClientRect().height) / 2;

        let blocksHeight = testimonials.getBoundingClientRect().height;

        let speed = -15;
        let isRunning = true;
        let translate = -blocksHeight;
        setInterval(() => {
            if(window.innerWidth < 1024){
                return;
            }
            if(translate < (-blocksHeight * 2) ){
                console.log('translate pre:  ', translate)
                testimonialsWrapper.classList.remove("transition-transform");
                translate = translate + blocksHeight + testimonialsHeightOffset;
                console.log('translate after:', translate)
            }else{
                testimonialsWrapper.classList.add("transition-transform");
            }

            if(isRunning){
               if(speed > -15){
                    speed = speed - 0.25;
                }else{
                    speed = -15;
                }
            }else{
                if(speed < 0){
                    speed = speed + 1;
                }else{
                    speed = 0;
                }
            }
            translate = translate + speed;
            console.log('translate: ', translate)
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
