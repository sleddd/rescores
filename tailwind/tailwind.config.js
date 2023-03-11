// Set Preflight flag and Tailwind Typography class name based on the build
// target.
let includePreflight, typographyClassName;
if ('editor' === process.env._rs_TARGET) {
	includePreflight = false;
	typographyClassName = 'block-editor-block-list__layout';
} else {
	includePreflight = true;
	typographyClassName = 'prose';
}

// Importing third party to help with pre-built
// UI styles like mega menus
// https://tailwind-elements.com/quick-start
 module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'../node_modules/tw-elements/dist/js/**/*.js',
		'./theme/**/*.html',
		'./theme/**/**/*.php',
		'./theme/theme.json',
	],
	safelist: [
		'text-sm',
		'text-md',
		'text-lg',
		'mt-0',
		'mb-0',
		'mr-0',
		'ml-0',
		'm-0',
		'pt-0',
		'pb-0',
		'pr-0',
		'pl-0',
		'p-0',
		'italic',
		'not-italic',
		'text-left',
		'text-center',
		'text-right',
		'shadow-sm',
		'shadow',
		'shadow-md',
		'shadow-lg',
		'shadow-xl',
		'shadow-2xl',
		'shadow-inner',
		'shadow-none'
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {},
			screens: {
				'2xl': {'max': '1535px'},
				'xl': {'max': '1279px'},
				'lg': {'max': '1023px'},
				'md': {'max': '767px'},
				'sm': {'max': '600px'},
			},
			fontFamily: {
				'sans': [ 'Lato', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
				'serif': ['Cormorant Garamond', 'Georgia', 'Times New Roman', 'Time', 'ui-serif', 'serif'],
				'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace'],
				'heading': ['Lato', 'sans-serif'],
				'body': ['Comorant Garamond', 'serif']
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson')(require('../theme/theme.json')),

		// Add Tailwind Typography.
		require('@tailwindcss/typography')({
			className: typographyClassName,
		}),
		// Uncomment below to add additional first-party Tailwind plugins.
		require('tw-elements/dist/plugin'),
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/line-clamp' ),
		// require( '@tailwindcss/container-queries' ),
	],
};
