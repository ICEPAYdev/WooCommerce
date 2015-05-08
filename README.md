![ICEPAY](https://camo.githubusercontent.com/49043ebb42bd9b98941d6013761d4aadcd33f14f/68747470733a2f2f6963657061792e636f6d2f6e6c2f77702d636f6e74656e742f7468656d65732f6963657061792f696d616765732f6865616465722f6c6f676f2e737667)

# Payment Module for WooCommerce

Make payments in your WordPress WooCommerce webshop possible. Download the Payment Module for WooCommerce [here](https://github.com/icepay/WooCommerce/releases), and you will be able to offer the most frequently used national and international online payment methods.

The master branche may not be stable. See the [release list](https://github.com/icepay/WooCommerce/releases) for stable version of this module.

## Contributing ##

* Fork it
* Create your feature branch (`git checkout -b my-new-feature`)
* Commit your changes (`git commit -am 'Add some feature'`)
* Push to the branch (`git push origin my-new-feature`)
* Create new Pull Request

## Changelog ##

### 2.3.2 (RC1) - 07/05/2015
* Fix - Reduce stock of product when paying with Afterpay.
* Fix - Better integration with the latest WooCommerce (2.3.8) version.
* Tweak - Plugin now uses tabs instead of everything on one page.
* Tweak - Payment methods are now in a WooCommerce table style.
* Dev - Now includes basic information about the installation.
* Dev - Wordpress Plugin overview page now includes a direct Settings link to the ICEPAY settings.
* Dev - Module now only supports WooCommerce > 2.3.
* Dev - Added German as supported language in the plugin.

### 2.3.1 - 14/04/2015
* Fix - Removed the custom Afterpay tax correction.

### 2.3.0 - 07/04/2015
* Fix - Removed Friesland Bank from iDEAL payment method.
* Fix - Fixed postback matching issues in the result function.
* Fix - Translated hardcoded strings.
* Fix - Fixed some plugin hrefs that leads to permission denied errors.
* Tweak - Replaced old logo with new one.
* Tweak - Refactored Dutch and English translations from source files.
* Dev - Removed backwards compatibility for WooCommerce < 2.3.
