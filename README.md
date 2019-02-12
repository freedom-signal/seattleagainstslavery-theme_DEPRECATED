# Seattle Against Slavery Theme

This is a custom WordPress theme based on [Foundation 6](https://foundation.zurb.com/sites.html).

## Requirements

- [Node.js](http://nodejs.org)
- [Sass](http://Sass-lang.com/)
- GCC. Windows users can install it through [MinGW](http://www.mingw.org/), and Mac users can install it through the [Xcode Command-line Tools](http://osxdaily.com/2014/02/12/install-command-line-tools-mac-os-x/).

## Quickstart

### 1. Clone the repository and install with npm

```bash
$ cd my-wordpress-folder/wp-content/themes/
$ git clone https://github.com/seattleagainstslavery/seattleagainstslavery.org.git
$ cd seattleagainstslavery.org
$ npm install
```

### 2. Configuration

#### YAML config file

The project includes a `config.yml` file. This file contains the configuration settings for this project.

### 3. Get started

```bash
$ npm start
```

### 4. Compile assets for production

When building for production, the CSS and JS will be minified. To minify the assets in your `/dist` folder, run

```bash
$ npm run build
```

#### To create a .zip file of your theme, run:

```
$ npm run package
```

Running this command will build and minify the theme's assets and place a .zip archive of the theme in the `packaged` directory. This excludes the developer files/directories from your theme like `/node_modules`, `/src`, etc. to keep the theme lightweight.

### Project structure

In the `/src` folder you will the working files for all our assets. The `/page-templates` folder contains templates that can be selected in the Pages section of the WordPress admin panel. To create a new page-template, simply create a new file in this folder and make sure to give it a template name.

### Styles and Sass Compilation

- `src/assets/scss/app.scss`: Add imports for new scss files here
- `src/assets/scss/global/*.scss`: Global settings
- `src/assets/scss/components/*.scss`: Buttons, forms, etc.
- `src/assets/scss/modules/*.scss`: Topbar, footer, etc.

### JavaScript Compilation

All JavaScript files, including Foundation's modules, are imported through the `src/assets/js/app.js` file. The files are imported using module dependency with [webpack](https://webpack.js.org/) as the module bundler.

If you need to output additional JavaScript files separate from `app.js`, do the following:

- Create new `custom.js` file in `src/assets/js/`. If you will be using jQuery, add `import $ from 'jquery';` at the top of the file.
- In `config.yml`, add `src/assets/js/custom.js` to `PATHS.entries`.
