=== WP-LESS ===
Contributors: oncletom
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=752034
Tags: dev, theme, themes, toolkit, plugin-toolkit, less, lesscss, lessc, lessphp, productivity, style, stylesheet, api
Requires at least: 2.8
Tested up to: 2.8.x
Stable tag: 1.0

Implementation of LESS (Leaner CSS) in order to make themes development easier.


== Description ==
[LESS](http://lesscss.org) is a templating language based on top of CSS. It provides numerous enhancements to speed up development and make its maintenance easier.

You can count on:

 * Variables
 * Mixins (inheritance of rules)
 * Nested Rules (write less, do more)
 * Accessors (inherit a value from a specific rule)
 * Functions (logic operations for dynamic results)

The plugin lets you concentrate on what you need: coding CSS. Everything else is handled automatically, from cache management to user delivery.  
Seriously.

The sole requirement is to use WordPress API and LESS convention: the `.less` extension.

**Minimal Requirements**: PHP 5.1.2 and WordPress 2.8.  
**Relies on**: [LESSPHP 0.1.5](http://leafo.net/lessphp/), [plugin-toolkit](http://wordpress.org/extend/plugins/plugin-toolkit/).


== Installation ==

= Automatic =
 1. Search for the plugin name (`WP-LESS`)
 1. Click on the install button
 1. Activate it

= Manual =
 1. Download the latest stable archive of the plugin
 1. Unzip it in your plugin folder (by default, `wp-content/plugins`)
 1. Activate it through your WordPress plugins administration page

== Changelog ==
= Version 1.0 =

 * implemented the forthcoming `plugin-toolkit` to speed up plugin development
 * bundled lessphp 0.1.5
 * implemented API to let you control the plugin the way you want
 * just in time compilation with static file caching


== Frequently Asked Questions ==
= How do I transform a LESS file into CSS? =
Consider this bit of code to automatically enqueue your stylesheet from your theme (or plugin):  
`wp_enqueue_style('mytheme', get_bloginfo('template_directory').'/style.css', array('blueprint'), '', 'screen, projection');`

To make it process by WP-LESS, switch to this way:  
`wp_enqueue_style('mytheme', get_bloginfo('template_directory').'/style.less', array('blueprint'), '', 'screen, projection');`

You understood well: you just need to change the extension of the file.

= And if I don't use the wp_enqueue_style method? =
For the moment, it's the unique way to handle this.  
Helpers will be provided soon to include LESS files in your templates in a fluent way.

= What if a *.less file contains only pure CSS? =
Nothing special. The LESS parser is fully compliant with CSS syntax.  
It means nothing will be broken so don't worry.

= I'm a themer and I don't want to ask my users to activate this plugin =
It's a very good moto. Anyway, at the moment I don't provide any helper for this purpose.  
It is planned for later.

If you are familiar with OOP programmation, you can make your way out of this. The source code is fully self-documented.

== Screenshots ==

1. Sample of LESS to CSS conversion.