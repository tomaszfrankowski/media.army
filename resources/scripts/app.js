import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper';
import AOS from "aos";

domReady(async () => {
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