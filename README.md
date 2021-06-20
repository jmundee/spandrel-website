# Spandrel Interactive Website

**Requirements:**
* [Node JS (14.17 or up)](https://nodejs.org/en/)
* PHP 7+

**Libraries:**
* Bootstrap 5.1
* TinySlider

## Running the project

### Install

To install the project dependencies just run the normal NPM command: `npm install`

### Running development

For development with a local PHP server and JS/CSS build in watch mode, just run `npm run dev`.

This command will display a lot of info in terminal, but the server will be accessible at [`localhost:8000`](http://localhost:8000)

### Production build

The build for final production update can be achieved by running `npm run build`, this command will run the webpack routine for SASS/JS.

After that the complete website will be inside the `public` folder including data and assets.

## Updating infos

Some general info (phone, email, ...) and projects details are contained in JSON files for better maintenance. You can find this JSON files inside '/public/data/'
