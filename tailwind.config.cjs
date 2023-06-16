// https://tailwindcss.com/docs/configuration

module.exports = {
	content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
	corePlugins: {
		backgroundOpacity: false,
	},
	theme: {
		container: {
			center: true,
		},
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
			palm: "768px",
			tablet: "1024px",
			desktop: "1136px",
		},
		transitionDuration: {
			1000: "1000ms",
		},
		extend: {
			colors: {
				primary: "var(--color-primary, #3551f2)",
				secondary: "var(--color-secondary, #8e2de2)",
				background: "var(--color-background, #fff)",
				text: "var(--color-text, #0e1530)",
				headings: "var(--color-secondary, #0e1530)",
			},
			spacing: {
				small: "40px",
				medium: "80px",
				large: "160px",
			},
			typography: (theme) => ({
				DEFAULT: {
					css: {
						color: theme("colors.text"),
						"--tw-prose-headings": theme("colors.headings"),
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

			const widths = [
				{ slug: "-narrow", width: "800px" },
				{ slug: "", width: "1136px" },
				{ slug: "-full", width: "100%" },
			];
			const heights = [
				{ slug: "-fullheight", height: "100%" },
				{ slug: "", height: "auto" },
				{ slug: "-screen", height: "100vh" },
			];
			const paddings = [
				{ slug: "-flat", padding: "0 32px" },
				{ slug: "-low", padding: "40px 32px" },
				{ slug: "", padding: "80px 32px" },
				{ slug: "-tall", padding: "160px 32px" },
			];
			heights.forEach((height) => {
				widths.forEach((width) => {
					paddings.forEach((padding) => {
						const slug = ".container" + width.slug + height.slug + padding.slug;
						addComponents({
							[slug]: {
								maxWidth: width.width,
								padding: padding.padding,
								height: height.height,
								marginLeft: "auto",
								marginRight: "auto",
							},
							[slug + " .container"]: {
								maxWidth: "100%",
								padding: "0",
								marginLeft: "0",
								marginRight: "0",
							},
						});
					});
				});
			});
		},
	],
	safelist: [
		"prose",
		{
			pattern:
				/(container)(|-narrow|-full)(|-fullheight||-screen)(|-flat|-low|-tall)./,
		},
		{
			pattern: /(bg|text)-(background|primary|secondary|tertiary|text)/,
		},
	],
};



