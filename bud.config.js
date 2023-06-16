export default async (app) => {
	app
		.entry({
			app: ["@scripts/app", "@styles/app"],
			editor: ["@scripts/editor", "@styles/editor"],
			swiper: ["@scripts/swiper-bundle", "@styles/swiper-bundle"],
		})
		.assets(["images"])
		.watch(["resources/views", "app"])
		.proxy("http://mediaarmy.local")
		.serve("http://localhost:3000")
		.setPublicPath("/app/themes/sage/public/")
		.wpjson.setOption("styles", {
			typography: {
				fontFamily: "var(--wp--preset--font-family--sans)",
			},
		})
		.settings({
			color: {
				custom: false,
				customDuotone: false,
				customGradient: false,
				defaultDuotone: false,
				defaultGradients: false,
				defaultPalette: false,
				duotone: [],
			},
			custom: {
				spacing: {},
				typography: {
					"font-size": {},
					"line-height": {},
				},
			},
			spacing: {
				padding: false,
				units: ["px", "%", "em", "rem", "vw", "vh"],
			},
			typography: {
				customFontSize: true,
			},
		})
		.useTailwindColors(true)
		.useTailwindFontFamily()
		.useTailwindFontSize()

		.enable();
};
