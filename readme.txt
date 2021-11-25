=== Add Prabhu Pay Payment In WooCommerce ===
Contributors: sanzeeb3
Tags: prabhu pay, woocommerce, payments, store
Requires at least: 4.9
Tested up to: 5.8
Requires PHP: 5.6
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Adds Prabhu Pay Payment Gateway for WooCommerce.

== Description ==

### WOOCOMMERCE PRABHU PAY PAYMENT GATEWAY PLUGIN

Accept the payment via Prabhu Pay from your WooCommerce store.

[Prabhu Pay](https://prabhupay.com/) is a mobile wallet in Nepal. This plugin allows you to accept payment from your customers via Prabhu Pay payment gateway. The developer of this plugin does not represent Prabhu Pay in anyway.

If your site do not accept Nepalese currency, this plugin isn't for you.

You can follow the [documentation](https://sanjeebaryal.com.np/how-to-accept-prabhu-pay-payment-on-the-wordpress-site) for detailed guidelines on setup.

Contributions of any kind are welcome! Visit our [GitHub repository](https://github.com/sanzeeb3/wc-prabhu-pay).

== Frequently Asked Questions ==

= I get "Error processing checkout. Please try again."

Turn on Debug log from *WooCommerce > Payments > Prabhu Pay*. Check the log file in wp-content/uploads/wc-logs/Prabhu-pay-{date}-xxx.log. You can see full technical details on what went wrong.

= Payment status is "Processing"

That's fine. "Processing" doesn't mean it's processing payment -- it means it's being processed/fulfilled by the site owner. If the products are marked both 'Virtual' and 'Downloadable', then the orders will automatically go to Complete status. 

[More about Order Statuses](https://woocommerce.com/document/managing-orders/#section-1)


== Changelog ==

= 1.0.0 - 11/25/2021 =
* Initial Release
