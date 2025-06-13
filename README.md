# Portfolio Website

This repository contains the source files for a personal portfolio site. The site is entirely static and lives in the `docs/` directory so it can be served with GitHub Pages or any static host.

## Viewing Locally

To preview the site on your machine simply open `docs/index.html` in your web browser. No build step is required.

## Contact Form

The contact form on the site submits to `process.php`. That PHP script sends an email with the contents of the form. If you want to use the form locally you will need to serve the `docs/` directory with a PHP-enabled server so that `process.php` can run.
