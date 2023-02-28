const colors = require('tailwindcss/colors');
const { customCss } = require('./tailwind-customcss');

module.exports = {
	theme: {
		extend: {
			typography: (theme) => ({
				/**
				 * Tailwind Typography’s default styles are opinionated, and
				 * you may need to override them if you have mockups to
				 * replicate. You can view the default modifiers here:
				 *
				 * https://github.com/tailwindlabs/tailwindcss-typography/blob/master/src/styles.js
				 */
				DEFAULT: {
	
					css: [
						{
							...customCss,
 							/**
							 * By default, max-width is set to 65 characters.
							 * This is a good default for readability, but
							 * often in conflict with client-supplied designs.
							 * A value of false removes the max-width property.
							 */
							maxWidth: false,
							/**
							 * You can customize your color theme below. The
							 * initial values are based upon the neutral gray
							 * scale theme, using the `primary` color from
							 * your `theme.json` file for links.
							 */
							'--tw-prose-body': colors.slate[700],
							'--tw-prose-headings': colors.slate[900],
							'--tw-prose-lead': colors.slate[600],
							'--tw-prose-links': theme('colors.link-active'),
							'--tw-prose-bold': colors.slate[900],
							'--tw-prose-counters': colors.slate[500],
							'--tw-prose-bullets': colors.slate[300],
							'--tw-prose-hr': colors.slate[200],
							'--tw-prose-quotes': colors.slate[900],
							'--tw-prose-quote-borders': colors.slate[200],
							'--tw-prose-captions': colors.slate[500],
							'--tw-prose-code': colors.slate[900],
							'--tw-prose-pre-code':  theme('colors.body-copy'),
							'--tw-prose-pre-bg': colors.slate[100],
							'--tw-prose-th-borders': colors.slate[300],
							'--tw-prose-td-borders': colors.slate[200],
							'--tw-prose-invert-body': colors.slate[300],
							'--tw-prose-invert-headings': colors.white,
							'--tw-prose-invert-lead': colors.slate[400],
							'--tw-prose-invert-links': colors.white,
							'--tw-prose-invert-bold': colors.white,
							'--tw-prose-invert-counters': colors.slate[400],
							'--tw-prose-invert-bullets': colors.slate[600],
							'--tw-prose-invert-hr': colors.slate[700],
							'--tw-prose-invert-quotes': colors.slate[100],
							'--tw-prose-invert-quote-borders': colors.slate[700],
							'--tw-prose-invert-captions': colors.slate[400],
							'--tw-prose-invert-code': colors.white,
							'--tw-prose-invert-pre-code': colors.slate[300],
							'--tw-prose-invert-pre-bg': 'rgb(0 0 0 / 50%)',
							'--tw-prose-invert-th-borders': colors.slate[600],
							'--tw-prose-invert-td-borders': colors.slate[700],
						},
					],
				},
			}),
		},
	},
};
