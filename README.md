Rescores - Hybrid WordPress Starter
========

Rescores is a very minimally-styled hybrid WordPress starter theme. One part block theme, one part classic, it supports the use of Full Site Editor ( FSE ) and global styles as well as classic features like the customizer. 

It is primarily a developer workflow that separates your theme files from your development files. Transpile your css and javascript into your theme which houses the distribution files, and when ready, load only your theme files to the production site.

It is based on Underscores ( https://underscores.me ) and UnderscoreTW ( https://underscoretw.com/ ). In a nutshell, it is a remodel of old themes for modern builds. 

---

![screenshot](https://user-images.githubusercontent.com/1176945/221829049-7235cfb0-cca9-4408-9c8e-3645fc2b612c.png)

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

---

## Q & A

**You have theme.json and blocks, why do you need a hybrid theme or framework like Tailwind?**

There are layouts where you may want more robust templating ability like that found in classic WordPress themes. Some developers also prefer a more traditional workflow for creating new themes. 

Rescores is a transitional theme that allows you to leverage both classic and modern WordPress theme styles. It has an old school workflow, with a new school twist. 

---

**But, why Tailwind?** 

Tailwind, at it's heart, is a collection of utility CSS classes that can be used to design and layout new sites quickly. Unlike other frameworks, such as Bootstrap, you use only what you need, but still have everything at your fingertips. In addition, Tailwind has a simple config that allows you to 'theme' sites without digging into the CSS. 

WordPress uses theme.json in block themes to control styles much like a Tailwind config file. Connecting the two, rescores lets you define your basic styles for blocks and elements like heading tags, anchor tags, etc in the theme.json and then converts that into global CSS that can be loaded via the standard style.css file. While theme.json generally only applies to blocks, this let's you leverage the block styles for a global or classic theme.

There are pros and cons to this approach. Block themes keep CSS contained to the blocks and pull in less CSS than a global stylesheet, however, sometimes as other plugins, blocks, and components get added, having some basic overarcing structures to cover things like heading and anchor tags can be helpful in maintaining branding styles. In addition, Tailwind utility classes can help you override a single block margin or pesky padding with a utility class if needed.

The idea, is that adding Tailwind gives you the flexibility to build whatever you need without having to fully re-invent the wheel and it connects the old to the new through the theme.json and the Tailwind config.

---

**More info...**

Tailwind utility classes and documentation: https://tailwindcss.com/

How Tailwind works: https://tailwindcss.com/ or https://kinsta.com/blog/tailwind-css/

How theme.json works: https://www.elmastudio.de/en/theme-json-for-wordpress-block-themes-explained/ or https://make.wordpress.org/core/2021/06/25/introducing-theme-json-in-wordpress-5-8/

---

Rescores is a transitional and experimental starter theme for quick development. It is very much a work in progress and if you find it helpful, feel free to use it how you see fit. The theme has a very minimal barebones style and only gets updated when I have time.

