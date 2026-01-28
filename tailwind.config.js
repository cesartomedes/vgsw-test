/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./*.php', './template-parts/**/*.php', './inc/**/*.php'],
	theme: {
		extend: {
			colors: {
				'verde-top': '#9FCE00',
			},
		},
	},
	plugins: [],
};
