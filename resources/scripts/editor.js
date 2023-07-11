import domReady from "@roots/sage/client/dom-ready";
import Swiper from "swiper";
import AOS from "aos";

domReady(async () => {
	AOS.init({
		duration: 3000, // values from 0 to 3000, with step 50ms
		easing: "smooth",
		offset: 20,
	});
	
});

import.meta.webpackHot?.accept(console.error);
