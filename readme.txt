=== Crypto-Currency Shortcode ===
Contributors: KAZApocrypha
Tags: coinwidget, bitcoin, litecoin, monacoin, kumacoin, ringo, dogecoin.
Requires at least: 3.0
Tested up to: 3.9.1
Stable tag: 1.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Defines a shortcode for embeddeding the standard donation button on your WordPress blog.

== Description ==

This plugin adds the shortcode [ccsc] to embed a coinwidget.com donation button.
Supports bitcoin, litecoin, monacoin, kumacoin, ringo and dogecoin.

== Usage ==

Embed the short [ccsc] anywhere in your posts or template to include a coinbase button that, when clicked, will display a address for users to send coins.

Supported attributes as documented here http://coinwidget.com/

* address - default ""
* currency - default "monacoin"
* counter - default "count"
* alignment - default "bl"
* qrcode - default "true" 
* auto_show - default "false"
* decimals - default "4"
* lbl_button - default "Donate"
* lbl_address - default "My Monacoin Address:"
* lbl_count - default "donations"
* lbl_amount - default "MONA"

Example:

`[ccsc 
	address="MHXo5e1fRqgvxuBMKyhUxPSntRUDMJxi9q"
	currency="monacoin" counter="count"
	alignment="bl" qrcode="true" auto_show="false"
	lbl_button="Donate" lbl_address="My Monacoin Address:"
	lbl_count="donations" lbl_amount="MONA"]`

Enjoy!

== Installation ==

1. Download the plugin via WordPress.org
2. Include the shortcode anywhere in your posts or pages or template.  With the appropriate plugins you can also include shortcodes in sidebar widgets.

== Changelog ==

= 1.4 =
* 2014-05-25
* Supported Ringo.

= 1.3 =
* 2014-05-22
* Change block search URI of Kumacoin public key. (http://kabe.proof-of.info/)
* Delete debug code.

= 1.2 =
* 2014-05-15
* Change block search URI of Monacoin public key.
* Supported Kumacoin.

= 1.1 =
* 2014-02-05
* readme.txt fix.

= 1.0 =
* 2014-02-04
* Supported Monacoin and Dogecoin.
* Change block search URI of Monacoin public key. (Monaxh.pw -> CryptoPoolMining.com.)

= 0.1 =
* 2014-02-03
* Initial release