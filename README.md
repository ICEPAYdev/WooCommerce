![ICEPAY](https://camo.githubusercontent.com/49043ebb42bd9b98941d6013761d4aadcd33f14f/68747470733a2f2f6963657061792e636f6d2f6e6c2f77702d636f6e74656e742f7468656d65732f6963657061792f696d616765732f6865616465722f6c6f676f2e737667)

# Payment Module for WooCommerce

Make payments in your WordPress WooCommerce webshop possible. Download the Payment Module for WooCommerce [here](https://github.com/ICEPAYdev/WooCommerce/releases), and you will be able to offer the most frequently used national and international online payment methods.

The master branche may not be stable. See the [release list](https://github.com/ICEPAYdev/WooCommerce/releases) for stable version of this module or from the [Wordpress plugin page](https://wordpress.org/plugins/icepay-woocommerce-online-payment-module/).

## Contributing ##

* Fork it
* Create your feature branch (`git checkout -b my-new-feature`)
* Commit your changes (`git commit -am 'Add some feature'`)
* Push to the branch (`git push origin my-new-feature`)
* Create new Pull Request

## Bug report ##

If you found a repeatable bug, and troubleshooting tips didn't help, then be sure to [search existing issues](https://github.com/ICEPAYdev/WooCommerce/issues) first. Include steps to consistently reproduce the problem, actual vs. expected results, screenshots, and your WP/WC and Payment module version number. Disable all extensions to verify the issue is a core bug.

## Changelog ##

Version | Release date | Changes
------- | ------------ | -------
2.3.7   | 01/11/2016   | ECC-97 Show real order ID in reference field; Add 'TR' prefix to ICEPAY transaction IDs that are used instead of OrderID
2.3.6   | 09/09/2015   | This emergency release disables SSL intermediate certificate checking to allow merchants on shared hosting providers to continue processing transactions while the hosting providers update their certificate store.
2.3.5   | 01/09/2015   | Injected new API version in Payment module (see [this commit](https://github.com/icepay/WooCommerce/commit/33b85afa5f7104fad94f1a1df1510c3335caa949) for info)<br>Dynamic plugin path for assets. (Thank you Marc)<br>Added new [LICENSE](https://github.com/icepay/WooCommerce/blob/master/LICENSE.md) to API repository.
2.3.4   | 02/06/2015   | Fully German translation.<br>Secure HTTP does not throw HTTP 301 statuscode.<br>Open status on postback now correctly handled.
2.3.3   | 12/05/2015   | Better translation when selecting payment method.
2.3.2   | 07/05/2015   | Reduce stock of product when paying with Afterpay.<br>Better integration with the latest WooCommerce (2.3.8) version.<br>Plugin now uses tabs instead of everything on one page.<br>Payment methods are now in a WooCommerce table style.<br>Now includes basic information about the installation.<br>Wordpress Plugin overview page now includes a direct Settings link to the ICEPAY settings.<br>Module now only supports WooCommerce > 2.3.<br>Added German as supported language in the plugin (rough translation).
