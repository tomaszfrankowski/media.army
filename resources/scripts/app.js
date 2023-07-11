import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper';
import AOS from "aos";
import { register } from "swiper/element/bundle";
import Accordion from "@scripts/blocks/accordion";
import Testimonials  from "@scripts/blocks/testimonials";

window.ototak = {
  offset: {
    containerDefault: 32,
		containerNarrow: 32,
	},
};

function calcOffset() {
  const windowWidth = document.body.getBoundingClientRect().width;
  if(windowWidth >= 1024) {
    window.ototak.offset.containerDefault = Math.round( ((windowWidth - 1328 + 64) / 2) > 32 ? ((windowWidth - 1328 + 64) / 2) : 32);
    window.ototak.offset.containerNarrow = ((windowWidth - 800 + 64) / 2) > 32 ? ((windowWidth - 800 + 64) / 2) : 32;
  }else{
    window.ototak.offset.containerDefault = 32;
    window.ototak.offset.containerNarrow = 32;
  }


}
window.addEventListener("resize", calcOffset(), { passive: true });

domReady(async () => {
  register(); // Swiper
  
    AOS.init({
			duration: 3000, // values from 0 to 3000, with step 50ms
			easing: "smooth",
			offset: 20,
		});
    // create a table of all #menu-header-menu elements
    const menu = document.querySelector('#header-menu');
    const menuItems = menu.querySelectorAll('li');
    const currentMenuItem = menu.querySelector('.current-menu-item');
    
    menu.style.setProperty(
			"--menu-item-position",
			currentMenuItem.offsetWidth / 2 + "px"
		);
    menu.addEventListener("mouseleave", () => {
			menu.style.setProperty(
				"--menu-item-position",
				currentMenuItem.offsetWidth / 2 + "px"
			);
		});
    
    menuItems.forEach((item) => {
        item.positionLeft = item.offsetLeft + item.offsetWidth / 2;
        item.addEventListener('mouseenter', () => {
            menu.style.setProperty('--menu-item-position', item.positionLeft + 'px');
        });
    });
});

import.meta.webpackHot?.accept(console.error);