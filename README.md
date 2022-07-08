# Sivulabra Starter Blocks
Experimental block theme with Full Site Editing support. Includes WooCommerce support. This theme includes:
* Full Site Editing support.
* Reusable classes to create custom blocks easily and fast.
* React is easily integrated into this theme.
* Modern WordPress workflow using [@wordpress/scripts](https://www.npmjs.com/package/@wordpress/scripts).
* WooCommerce support including custom hooks, overridden styling and product gallery features such as zoom, swipe and lightbox.

## Installation
Under construction.

## Development
Under construction.

### Adding a new block
For now the process of creating a new block is very manual and requires copy-pasting stuff. In the future this will be automated.
1. Create a new block instance in either `inc/blocks.php` or `inc/placeholder-blocks.php` depending on the desired block type. There is an example instance declared in `inc/blocks.php` which you can duplicate and rename.
2. Create two new files in `blocks`: `block-name.js` and `block-name.php`. NOTE: the file names must match the instance created in step 1.
3. Edit `block-name.js` to your liking.
4. Add the block's JavaScript file to the build process. In case of placeholder blocks, you can skip this step.

### Adding WooCommerce
This theme has the basic skeleton to implement WooCommerce. Default styling generated by WooCommerce is disabled and a barebone stylesheet is used instead to provide maximum customization capabilities. However, things like WooCommerce tables styled for you as they are a pain to style by hand.
1. Make sure that WooCommerce CSS is included in the `scss/main.scss`.
2. Install WooCommerce.

## FAQ
Under construction.

### What is a Placeholder Block?
Under construction.