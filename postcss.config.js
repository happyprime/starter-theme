module.exports = {
	plugins: {
		'postcss-import': {
			plugins: [
				require("stylelint"),
			  ],
		},
		'autoprefixer': {},
		'postcss-custom-media': {},
	}
};
