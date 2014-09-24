# Jumpstart Starter Theme

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

Jumpstart is a WordPress starter theme based on [Roots](https://github.com/roots/roots/) and several other starter themes. It basically is a stripped down version of [Roots](https://github.com/roots/roots/) ;)

## Full stack installation and configuration

1. Create a new [Bedrock](https://github.com/roots/bedrock) project and follow the installation instructions.
2. Remove unwanted Bedrock features.
3. Add plugins to composer.json
4. Install this theme and follow instructions below.
5. Initialize new git project.

## Theme installation and configuration

Download the theme and then rename the directory to the name of your theme or website.

Please read the [Roots](https://github.com/roots/roots/#theme-development) documentation on how to configure the theme and install dependencies.

## Available Grunt commands

* `grunt dev` — Compile LESS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Installing frontend packages

1. `bower install --save [package name]`.
2. Add the path of the unminified js file to `jsFileList` in `Gruntfile.js`.

## Additional resources for common tasks

* [wp-bootstrap-navwalker](https://github.com/twittem/wp-bootstrap-navwalker)
* [register-post-type](https://gist.github.com/justintadlock/6552000)

## TODO

* Use [Timber](https://github.com/jarednova/timber) for templates