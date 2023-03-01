Rescores - Hybrid WordPress Starter Theme
========

One part block theme, one part classic, Rescores is a hybrid WordPress starter theme that supports the use of Full Site Editor ( FSE ) as well as classic features like the customizer. 

It utilizes a developer workflow that helps separate your theme production files from your development process. It also lets you style both block and general site elements such as headings, links, and paragraphs through the theme.json or through a classic build process with Tailwind.

It is based on Underscores ( https://underscores.me ) and UnderscoreTW ( https://underscoretw.com/ )

---

![screenshot-home](https://user-images.githubusercontent.com/1176945/222043554-70a1d495-360f-49a8-aef4-81be967ddbd0.png)

[View Demo Site](https://demo.claudetteraynor.info)

---

## Installation

1. Move this folder to `wp-content/themes` in your local development environment
2. Run `npm install && npm run dev` in this folder
3. Activate this theme in WordPress

Looking for live reloading? Learn how to [add Browsersync to your project](https://underscoretw.com/docs/getting-started/#h-using-browsersync).

## Development

4. Run `npm run watch`
5. Add [Tailwind utility classes](https://tailwindcss.com/docs/utility-first) with abandon

See the complete [development documentation](https://underscoretw.com/docs/tailwind-plugins-npm-commands/) for more details.

## Deployment

6. Run `npm run bundle`
7. Upload the resulting zip file to your site using the “Upload Theme” button on the “Add Themes” administration page

Or [deploy with the tool of your choice](https://underscoretw.com/docs/deployment/#h-other-deployment-options)!

Note! When zipping your theme for production, be sure to update any block template part or patterns that have the theme property noted as "theme": "rescores/theme" to "theme": "rescores" as the production build does not route through the theme folder.

## About Rescores

Rescores is a transitional experimental starter theme used to explore the line between block and classic theme development. It is very much a work in progress and if you find it helpful, feel free to use it however you see fit. The theme has a very barebones amount of styling and only gets updated when I have time.

**You have theme.json and blocks, why do you need a hybrid theme or framework like Tailwind?**

There are layouts where you may want more robust templating ability like that found in classic WordPress themes. Some developers also prefer a more traditional workflow for creating new themes. 

Rescores is a transitional theme that allows you to leverage both classic and modern WordPress to create whatever kind of site or template you want.

**But, why Tailwind?** 

Unlike frameworks such as Bootstrap or Foundation, Tailwind lets you pull in only the classes you actually use reducing the amount of css you have for a site. It also has a number of utility classes you can pull in for overriding block styles with a class such as text-sm or p-0 ( padding: 0 ). The config in Tailwind is also very robust which with minimal work will allow you to create a full site theme. Underscoretw also adds a Tailwind CSS plugin that automatically pulls colors and widths from a WordPress theme’s theme.json file into the global css. I took this a step further, by parsing in the style elements property from the theme.json as well, so you can use theme.json to style global headings, links, and other basic elements. It is not meant to handle all site css, but to handle the major ones needed for quick theming and branding. Global css can create conflicts with blocks. For instance, styling a global h1 tag may override block styles in some cases. You will want to think through style conflicts a bit before expanding or using this feature.

**Why did you create Rescores?**

Rescores was created to explore the line between a block and hybrid theme to see how they can integrate to leverage both sides. Not everyone is on board with simple block themes especially when they need more complicated theme templates that have many dynamic parts. However, many WordPress users prefer being able to use Gutenberg to add new site templates or make modifications rather than having to hire a developer. This lets you use both block and classic theming to do whatever you need. You can also transition from it into a standard block or classic theme in minutes by minimal re-structuring or removing either the html or php files.

---

**More info...**

Tailwind utility classes and documentation: https://tailwindcss.com

More on Tailwind: https://tailwindcss.com or https://kinsta.com/blog/tailwind-css

More on block themes and theme.json:

https://fullsiteediting.com/lessons/creating-block-based-themes

https://www.elmastudio.de/en/theme-json-for-wordpress-block-themes-explained

https://make.wordpress.org/core/2021/06/25/introducing-theme-json-in-wordpress-5-8


