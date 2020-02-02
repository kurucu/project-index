# Project Index

A little tool to provide an index page for all of your current projects.

## Installation

Clone or copy this into the directory where you keep your projects/sites.

I use Laravel Valet, so I've put this where Valet is "parked".

## Configuration

Edit `public/index.php`, and amend the following variables as required:

  * `$directory` - Set the directory to be scanned for contents (default: grandparent of index.php)
  * `$ignore` - An array of folders to be ignored (default: `['.', '..', '.DS_Store']`)
  * `$protocol` - The protocol to be prepended to the content name (default: `https://`)
  * `$tld` - The TLD to be appended to the content name (default: `.test`)
  * `$title` - The title of the page (default: `Projects`)

## Advanced

The raw CSS is in `tailwind.css`, and this gets built to `public/public.css`. There are currently no customisations.

If you want to update or change tailwind, just run `yarn build` afterwards.

