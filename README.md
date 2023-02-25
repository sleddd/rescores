Rescores - Hybrid WordPress Starter for a Block or Classic Theme ( FSE and Customizer )
========

Rescores is a very minimally-styled hybrid WordPress starter theme that supports use of Full Site Editor ( FSE ) and global styles as well as standard legacy/classic features like the customizer. 

It is based on Underscores ( https://underscores.me ) and UnderscoreTW ( https://underscoretw.com/ ). In a nutshell, it is a remodel of the old themes for modern builds. 

## You have theme.json and blocks, why do you need a hybrid theme or framework like Tailwind? 

There are layouts where you may want more robust templating ability like that found in classic WordPress themes. Some developers also prefer a more traditional workflow for creating new themes. 

Rescores is a transitional theme that allows you to leverage both classic and modern WordPress theme styles. It has an old school workflow, with a new school twist. 

## But, why Tailwind? 

Tailwind, at it's heart, is a collection of utility CSS classes that can be used to design and layout new sites quickly. Unlike other frameworks, such as Bootstrap, you use only what you need, but still have everything at your fingertips. In addition, Tailwind has a simple config that allows you to 'theme' sites without digging into the CSS. 

WordPress uses theme.json in block themes to control styles much like a Tailwind config file. Connecting the two, rescores lets you define your basic styles for blocks and elements like heading tags, anchor tags, etc in the theme.json and then converts that into global CSS that can be loaded via the standard style.css file. While theme.json generally only applies to blocks, this let's you leverage the block styles for a global or legacy/classic theme.

There are pros and cons to this approach. Block themes keep CSS contained to the blocks and pull in less CSS than a global stylesheet, however, sometimes as other plugins, blocks, and components get added, having some basic overarcing structures to cover things like heading and anchor tags can be helpful in maintaining branding styles. In addition, Tailwind utility classes can help you override a single block margin or pesky padding with a utility class if needed.

The idea, is that adding Tailwind gives you the flexibility to build whatever you need without having to fully re-invent the wheel and it connects the old to the new through the theme.json and the Tailwind config.

## Ok, but PHP and HTML? 

A block theme using all HTML should load faster and help separate backend code from frontend templating. However, WordPress may sometimes get messy as blocks are still new to the game and have certain design and other limitations. You can easily switch this theme from a hybrid to a standard block theme, by removing the php template files and moving the template part html for templates such as header, footer, single, etc to the the templates folder or you can use it as is and build a more classic page template or theme with patterns and standard PHP templates. Rescores was my way of exploring the line between block and classic themes. It was meant to provide a way to help build both quickly.

## More info...

View a searchable index of Tailwind utility classes and documentation here: https://tailwindcss.com/

To learn more about how Tailwind works visit: https://tailwindcss.com/ or https://kinsta.com/blog/tailwind-css/

To learn more about theme.json works visit: https://www.elmastudio.de/en/theme-json-for-wordpress-block-themes-explained/ or https://make.wordpress.org/core/2021/06/25/introducing-theme-json-in-wordpress-5-8/

Rescores is a transitional and experimental starter theme for quick development. It is very much a work in progress and if you find it helpful, feel free to use it how you see fit. The theme has a very minimal barebones style, but here are a couple current screenshots: 

![Screen Shot 2023-02-24 at 5 15 50 PM](https://user-images.githubusercontent.com/1176945/221328708-82a29c98-0236-4dd9-92df-4dea125f9540.png)

![Screen Shot 2023-02-24 at 5 16 44 PM](https://user-images.githubusercontent.com/1176945/221328712-7b838e08-3711-4266-b433-e17671cb7a2b.png)

The basic structure of the theme follows [ UnderscoreTW ](https://underscoretw.com/) and you can use their documentation for additional guidance on install and configuration or read below. 

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
