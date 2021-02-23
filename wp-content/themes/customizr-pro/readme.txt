# Customizr Pro v2.4.7
![Customizr - Pro](/screenshot.png)

> The pro version of the popular Customizr WordPress theme.

## Copyright
**Customizr Pro** is a WordPress theme designed by Nicolas Guillaume in Nice, France. ([website : Press Customizr](http://presscustomizr.com>))
Customizr Pro is distributed under the terms of the [GNU GPL v2.0 or later](http://www.gnu.org/licenses/gpl-3.0.en.html)

## Demo, Documentation, FAQs and Support
* DEMO : https://demo.presscustomizr.com/
* DOCUMENTATION : https://docs.presscustomizr.com/article/182-getting-started-with-the-customizr-pro-wordpress-theme
* FAQs : https://docs.presscustomizr.com/customizr-pro/faq
* SUPPORT : https://presscustomizr.com/support/

## Changelog
= 2.4.7 February 2nd, 2021 =
* fixed : Conflict with OptimizePress3
* fixed : [header] top offset issue when user logged in
* updated : Font Awesome icons to latest version (v5.15.2)
* added : [social links] added Tiktok icon

= 2.4.6 January 22nd, 2021 =
* fixed : [effect] effect not applied on all expected selectors due to an error in the inline javascript code

= 2.4.5 January 17th, 2021 =
* fixed : [PHP 8] error Uncaught ValueError: Unknown format specifier “;” in core/czr-customize-ccat.php:966

= 2.4.4 January 13th, 2021 =
* added : [featured pages] support for shortcodes in fp custom text
* added : [social links] mastodon icon

= 2.4.3 January 8th, 2021 =
* fixed : [PHP 8.0] broken value checks on boolean options

= 2.4.1 January 5th, 2021 =
* fixed : [performance] preload customizr.woff2 font
* fixed : [performance][php] removed duplicated queries for 'template' option and thumbnail models
* fixed : [performance] improve loading performance of Font awesome icons to comply with Google lighthouse metrics ( preload warning removed )
* improved : [performance][footer] replaced font awesome WP icon

= 2.4.0 December 14th, 2020 =
* fixed : [PHP 8] Fix deprecation notices for optional function parameters declared before required parameter

= 2.3.14 December 10th, 2020 =
* fixed : [WP 5.6][WP 5.7] replaced deprecated shorthands
* fixed : [WP 5.6][fancybox] Close (x) link not working on pop-up image in galleries
* fixed : [WP Gallery Block] padding style conflict created by the theme

= 2.3.13 December 2nd, 2020 =
* fixed : [links] external links icons not displayed

= 2.3.12 December 1st, 2020 =
* fixed : [menu] javascript error on click on menu item with an anchor link

= 2.3.11 December 1st, 2020 =
* fixed : [headings] H3 heading size not smaller enough than H2 makes it difficult to distinguish
* fixed : [WP 5.7] remove jquery-migrate dependencies
* improved : [Font customizer][performance][JS] remove webfontload library from front js
* improved : [Font customizer][performance][JS] write front js inline
* improved : [Font customizer][performance][CSS] write base front CSS inline + load stylesheet for effects only when needed
* improved : [Font customizer][performance][CSS] loads Google effect images locally
* improved : [Home Features Pages][performance] print front js inline

= 2.3.10 November 23rd, 2020 =
* fixed : [Links] => when underline is disabled, hovering/activating a link should display the underline

= 2.3.9 November 19th, 2020 =
* added : [CSS][links] added a new option to opt-out underline on links. Option located in customizer > Global Settings > Formatting

= 2.3.8 November 17th, 2020 =
* fixed : [javascript] console warning when resizing in console due to an error in flickity slider script

= 2.3.7 November 17th, 2020 =
* fixed : [TRT requirement][accessibility] Links within content must be underlined
* fixed : [WP 5.6][jQuery] adapt to WP jQuery updated version. Prepare removal of jQuery Migrate in future WP 5.7 ( https://make.wordpress.org/core/2020/06/29/updating-jquery-version-shipped-with-wordpress/ )

= 2.3.6 November 4th, 2020 =
* fixed : [PHP] possible warning => "Deprecated: Invalid characters passed for attempted conversion" when converting hex colors
* added : support for auto-update

= 2.3.5 November 2nd, 2020 =
* tested : [WordPress] Customizr v4.3.5 is 100% compatible with WP 5.5.3
* fixed : [Menu] right clicking a parent menu item breaks sub-menu items auto-collapse
* fixed : [CSS] add back the "home" CSS class to body tag when user picked option "Don't show any posts or page"
* fixed : [Infinite scrool] WooCommerce, if infinite scroll is not supported,remove the "load more products" button
* added : [Infinite scroll] implement a new filters 'czr_infinite_scroll_handle_text' allowing developers to replace the text "Load more..." by a custom one

= 2.3.4 October 7th, 2020 =
* added : [CSS] add current theme version as CSS class to body tag

= 2.3.3 September 18, 2020 =
* fixed : [admin] security issue

= 2.3.2 September 9, 2020
* fixed : Color picker CSS broken https://github.com/presscustomizr/hueman-pro-addons/issues/214
* improved : Successfully tested with WP 5.5.1.

= 2.3.1 August 28, 2020 =
* fixed : [search icon] when displayed on the left in the main header, search field is partially hidden when revealed
* fixed : [script][admin] loading failed for the czrSelect2.min.js

= 2.3.0 July 21st, 2020 =
* Customizr has been successfully tested with WP 5.5
* fixed : [compatibility with WP 5.5] adapt customizer color-picker script with latest version of WP 5.5

= 2.2.9 July 16th 2020 =
* fixed : [Admin] possible PHP error in admin

= 2.2.8 July 16th 2020 =
* fixed : [Theme check] adapt to latest additions by theme review team
* fixed : [magnific popup] should not be loaded when ligthbox option is unchecked
* improved : [performances] preload Google Fonts by default

= 2.2.7 May 30th 2020 =
* added : [search form] on desktop new simple default mode for search form in header. Full screen search is optional in Customizing ▸ Header ▸ Design settings for desktops and laptops ▸ Search icon
* added : [post metas] add a way to hook before and after
* fixed : [post date] user defined date format is not taken into account when rendering dates
* fixed : [comments] when using a plugin like wpdiscuz the comment link (in post heading) links to nowhere

= 2.2.6 May 14th 2020 =
* fixed : [javascript] possible error due to missing underscore.js asset when "lightbox image" option is unchecked

= 2.2.5 May 14th 2020 =
* fixed : [Javascript][plugin compatibility] including underscore in the main script can break other plugins
* fixed : [slider arrows][mobile] next/previous arrows are hiding a significant part of the image
* fixed : [Woocommerce][Gutenberg] products blocks don’t work
* fixed : fixed [Post navigation][mobile] navigation words are cut out
* fixed : [Search form] gutenberg search block style is broken
* fixed : [TRT] add new required fields in style.css
* improved : [javascript] make sure maybe deprecated $.browser exists before using it
* added : [template][hooks] add new hooks before and after post heading title in post lists
* added : [Font Customizer][performance] add an option to disable totally Font Customizer if needed
* added : [Font Customizer][performance] added display=swap parameter to Google fonts to ensure text remains visible during webfont load


= 2.2.4 April 20th 2020 =
* fixed : [Horizontal Menus] submenu expansion on click is broken
* fixed : [Menus] make sure the cursor is a pointer for a menu item, even when it has no href attribute
* fixed : [Lazy loading] images are not lazy loaded when dynamic content is inserted in the DOM
* fixed : [Font Customizer] possible php warning displayed when generating CSS rules for line-height

= 2.2.3 April 15th 2020 =
* fixed : [Mobile menu] regression introduced when improving mobile menu in last update.

= 2.2.2 April 14th 2020 =
* fixed : [Mobile menu] on mobile menu, when the parent item has no href attribute, the submenu can only be expanded by clicking on the caret icon, and not on the parent menu item title
* fixed : [Horizontal Menu] on touch devices, 2 touches were needed to expand submenus in horizontal menus
* updated : [infinite scroll] "Load more posts" is replaced by neutral "Load more"
* improved : [masonry] javascript improvements

= 2.2.1 March 26th 2020 =
* fixed : retina display issue with Gif images
* added : a new option to preload Google fonts. Disabled by default

= 2.2.0 March 19th 2020 =
* fixed : style conflict with the Ninja Forms date picker
* added : [performance] new options to defer Font Awesome icons and javascript in order to avoid render blocking issues

= 2.1.45 February 18th 2020 =
* fixed : [javascript] potential breakage of front js when using a cache plugin along with masonry and/or infinite scrolling
* fixed : [security] added rel="noopener noreferrer" to footer credits external links to improve performance and prevent security vulnerabilities
* improved : [performance] removed Vivus.js library and $.fn.animateSvg().Could also break front javascript when using cache plugins and that $.fn.animateSvg() was invoked too early

= 2.1.44 February 17th 2020 =
* fixed : html markup errors when displaying post pagination
* fixed : [Featured Pages] html error => missing space between data-color attribute
* fixed : [Html] the "navigation" role is unnecessary for element
* fixed : [Html] the "banner" role is unnecessary for header element
* fixed : error when computing colors with rgb to rgba
* improved : disable front page navigation by default
* improved : [asset] update fontawesome to latest version
* added : support for Viber link in social links
* added :  featured image in singular => added a new option allowing users to display the image in its original dimensions

= 2.1.43 January 31st 2020 =
* fixed : removed support for HTML 5 "async" on main js script because of a potential conflict with masonry grid.

= 2.1.42 January 30th 2020 =
* fixed : text on search button might not be visible on a dark background
* improved : replace "Search" text by an icon on search button
* improved : added support for HTML 5 "async"
* improved : Post default layout should be full width for new users

= 2.1.41 January 27th 2020 =
* fixed : text in search button can be truncated in sidebar

= 2.1.40 January 21st 2020 =
* fixed : [Search form] current implementation can be misleading => added a search button next to the search input field
* added : "flipboard" social network to the list of icons