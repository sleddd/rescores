const themeJSON = require('../theme/theme.json');
const customCss = {};

/*
 * Converting themeJSON styles.elements into tailwind
 * custom css properties, so they apply to blocks
 * and to the theme html in general, but it can all
 * be controlled through the theme.json file.
 * 
 * This extends the ability of the out-of-the-box
 * theme.json conversions.
 **/
Object.keys(themeJSON.styles.elements).forEach((e) => {

	// Looping through element styles.
	Object.keys(themeJSON.styles.elements[e]).forEach((element) => {
        
		// Changing link element name to 'a'.
		let elementName = 'link' == e ? 'a' : e;

		// Adjusting element name for psuedo elements.
		elementName =
			'color' == element || 'typography' === element
				? elementName
				: elementName + element;


		// Pulling styles for element or pseudo element as applicable.
		let elementStyles =
			elementName == 'a'
				? themeJSON.styles.elements[e]
				: themeJSON.styles.elements[e][element];

		// Pulling typography styles.
		let typography = elementStyles.typography
			? { ...elementStyles.typography }
			: {};

		// Pulling color styles.
		let color =
			elementStyles.color && elementStyles.color.text
				? { color: elementStyles.color.text }
				: {};
		color =
			elementStyles.color && elementStyles.color.background
				? { ...color, background: elementStyles.color.background }
				: color;

		// Removing color and type from remaining styles.
		delete elementStyles.typography;
		delete elementStyles.color;

		// Setting general style attributes.
		let general =  elementName != 'a' ? { ...elementStyles } : {};
		 
		// Checking for a color attribute hidden in general.
		if ( general.text ) {
			let textColor = general.text;
			delete general.text;
			general = { ...general, color: textColor };
		}

		// If anchor only remove hover etc.
		

		// Adding element to customCSS object for config.
		if ( ! customCss[elementName ] ) {
			customCss[elementName] = {
				...general,
				...color,
				...typography,
			}; 
		}
	});
});
exports.customCss = customCss;
