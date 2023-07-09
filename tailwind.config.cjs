// https://tailwindcss.com/docs/configuration

module.exports = {
	content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
	corePlugins: {
		backgroundOpacity: false,
		container: false,
	},
	theme: {
		fontSize: {
			sm: ["14px", { lineHeight: "24px" }], // 17px
			base: ["16px", { lineHeight: "24px" }], // 21px : 32px
			default: ["16px", { lineHeight: "24px" }], // 21px : 32px
			xl: ["27px", { lineHeight: "40px" }], // 27px : 40px
			"2xl": ["34px", { lineHeight: "48px" }], // 34px
			"3xl": ["43px", { lineHeight: "56px" }], // 43px
			"4xl": ["55px", { lineHeight: "64px" }], // 55px
			"5xl": ["128px", { lineHeight: "112px" }], // 70px
		},
		lineHeight: {
			none: "1",
			tight: "1.14285714", // 24
			normal: "1.52380952", // 32
			relaxed: "1,.047619", // 40
		},
		screens: {
			// breakpoints
			palm: "768px",
			tablet: "1024px",
			desktop: "1328px",

			// containers
			narrow: "800px",
			default: "1328px",
			fullwidth: "100vw",
		},
		transitionDuration: {
			1000: "1000ms",
		},
		extend: {
			colors: {
				primary: "var(--color-primary, #3551f2)",
				secondary: "var(--color-secondary, #B2D0E9)",
				background: "var(--color-background, #fff)",
				content: "var(--color-content, #0e1530)",
				headings: "var(--color-content, #0e1530)",
				currentColor: "currentColor",
			},
			spacing: {
				// vertical
				small: "32px",
				medium: "64px",
				large: "128px",
				// horizontal
				half: "calc(50% - 16px)",
				narrow: "800px",
				fullwidth: "100vw",
				defaultwidth: "1328px",
			},
			maxWidth: {
				paragraph: "400px",
			},
			typography: (theme) => ({
				DEFAULT: {
					css: {
						color: theme("colors.text"),
						"--tw-prose-headings": theme("colors.text"),
						"--tw-prose-links": theme("colors.primary"),
						maxWidth: "100%",
						fontSize: "21px",
						lineHeight: "32px",
						p: {
							fontSize: "16px",
							lineHeight: "24px",
							marginTop: "0",
							marginBottom: "24px",
						},
						h6: {
							fontSize: "17px",
							lineHeight: "24px",
							marginTop: "8px",
							marginBottom: "16px", //24
							fontWeight: "600",
							letterSpacing: "1px",
						},
						h5: {
							fontSize: "21px",
							lineHeight: "32px",
							marginTop: "16px",
							marginBottom: "16px",
							fontWeight: "600",
						},
						h4: {
							fontSize: "27px",
							lineHeight: "40px",
							marginTop: "24px",
							marginBottom: "16px",
						},
						h3: {
							fontSize: "34px",
							lineHeight: "48px",
							marginTop: "32px",
							marginBottom: "16px",
						},
						h2: {
							fontSize: "43px",
							lineHeight: "56px",
							marginTop: "40px",
							marginBottom: "16px",
						},
						h1: {
							fontSize: "55px",
							lineHeight: "64px",
							marginTop: "48px",
							marginBottom: "16px",
						},
						br: {},
					},
				},
			}),
			transitionTimingFunction: {
				smooth: "cubic-bezier(0.1, 1, 0.16, 1)",
			},
		},
	},
	plugins: [
		require("@tailwindcss/typography"),
		function ({ addComponents }) {
			addComponents({
				":root": {
					"--swiper-theme-color":
						"var(--wp--preset--color--primary) !important",
				},
			});
		},
	],
	safelist: [
		"prose",
		"object-cover",
		"text-right",
		"max-w-paragraph",
		{
			pattern: /(bg|text)-(background|primary|secondary|tertiary|body)/,
		},
		{
			pattern: /(h)-(auto|full|screen)/,
		},
		{
			pattern: /(max-w-screen)-(default|narrow|fullwidth)/,
		},
		{
			pattern: /(pt|pb)-(0|10|20|40)/,
		},
		{
			pattern: /(!?)(m|p)(t|r|b|l|x|y)-(0|4|8|16)/,
		},
	],
};



