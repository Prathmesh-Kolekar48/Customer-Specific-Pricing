=== Customer Specific Pricing for WooCommerce ===

Current Version: 4.6.17.3

Author:  WisdmLabs

Author URI: https://wisdmlabs.com/

Plugin URI: https://wisdmlabs.com/woocommerce-user-specific-pricing-extension/

Tags: WooCommerce pricing add on, customer based pricing WooCommerce, per customer pricing WooCommerce

Requires at least: 4.2

Tested up to: 6.8.1

WC Requires at least: 3.0.0

WC Tested up to: 9.9.4

Stable tag: 4.6.17.3

License: GNU General Public License v2 or later

== Description ==

The Customer Specific Pricing for WooCommerce Plugin allows the store owner, to set specific product prices for individual customers, user roles, or groups. In case a price is not set for a customer, the default price of the product will be applied.


== Installation ==

Important: This plugin is a premium extension for the WooCommerce plugin. You must have the WooCommerce plugin already installed.

= Minimum Requirements =

* WordPress 4.2 or greater
* PHP version 5.6 or greater
* MySQL version 5.0 or greater

= Manual installation =

1. Upon purchasing the Customer Specific Pricing for WooCommerce, an email will be sent to the registered email id, with the download link for the plugin and a purchase receipt id. Download the Customer Specific Pricing plugin using the download link.

2. Go to Plugin-> Add New menu in your dashboard and click on the Upload' tab. Choose the 'customer-specific-pricing-for-woocommerce.zip' file to be uploaded and click on Install Now.

3. After the plugin has installed successfully, click on the Activate Plugin link or activate the Customer Specific Pricing plugin from your Plugins page.

4. A CSP License sub-menu will be created under Plugins menu in your dashboard. Click on this menu and enter your purchased product's license key. Click on Activate License. If license is valid, an 'Active' status message will be displayed, else 'Not Active' will be displayed.

5. Upon entering a valid license key, and activating the license, a 'Customer Specific Pricing' tab will be created under the 'Product Data' section for every single Product settings page in your dashboard.


== Change Log ==

= 4.6.17.3 =
* Fix           - Product ID fetching corrected.
* Fix           - Unique rule constraint error resolved for Product Pricing tab.
* Fix           - Missing CSS files on search page fixed.
* Fix           - Price display adjusted for tax-inclusive prices.
* Fix           - Resolved Cart Discount for Existing Customers.

= 4.6.17.2 ==
* Fix           - Added category pricing update support via CSP API.
* Fix           - Corrected backend order pricing for specific role.
* Fix           - Addressed landing page slowness and shared error log.
* Tweak         – Compatible with WooCommerce 9.8.5
* Tweak         – Compatible with WordPress 6.8.1

= 4.6.17.1 ==
* Fix           – Resolved an issue where coupons should not be applied to sale products on the cart page.
* Tweak         – Added a filter for the discount quantity table.
* Tweak         – Added a filter for "Search By and Delete" tabs.
* Tweak         – Compatible with WooCommerce 9.7.1
* Tweak         – Compatible with WordPress 6.7.2

== 4.6.17 ==
* Tweak         - Added filter to applied lowest price on archive and single page for simple and variable products.
* Fix           - All Tax related issues resolved for Archive and Single page.
* Fix           - Resolved duplicate prices showing after enabled the "Enable strikethrough" settings.
* Fix           - Resolved multiple Quantity related issue for single products. 

== 4.6.16 ==
* Fix           - The issue of spaces in the SKU causing import errors has been resolved.
* Fix           - Setting the CSP price to be the same as the regular price is causing duplicate entries.
* Fix           - The schedule section is displaying an incorrect time.
* Tweak         - To ensure the CSP price is the same for all variations and displayed instead of the regular price, we have added a new filter: wdm_csp_showing_csp_range_price.

== 4.6.15 ==
* Fix           - Resolved the pricing issue on the frontend.
* Fix           - Fixed the pricing issue on variable products.
* Fix           - Addressed the problem when the sale price and regular price are the same.
* Fix           - Implemented a filter for table content.
* Fix           - Group deactivated issue resolved.

== 4.6.14 ==
* Fix           - Resolved the issue of displaying the same price on both archive and single pages.
* Fix           - Fixed the problem with the lowest price display.
* Fix           - Addressed the issue of price display for values exceeding 1000.
* Fix           - Compatibility with WordPress 6.5.0
* Fix           - Compatibility with Woocommerce 8.7.0

== 4.6.13.1 ==
* Tweak         - The license URL changed to https://store.wisdmlabs.com/license-check/

== 4.6.13 ==
* Fix           - Resolved the warnings on variant products.

== 4.6.12 ==
* Fix           - Quantity table not visible on single product page.
* Fix           - Fixed the warning messages appearing for both Simple and variable products.
* Improvement   - Deprecation of function in latest version of PHP.

== 4.6.11 ==
* Fix           - the warnings related to SQL syntax which use to get displayed for the products which are out of stock.
* Fix           - the issue where striked regular price used to get displayed when CSP price is more than regular price.
* Fix           - the pricing issue in the cart for variable products.
* Fix           - the issue where CSP price used to get reflected for the products even after removal of CSP price.

== 4.6.10 ==
* Fix           - Define the value of the $CSP_Prices variable.
* Fix           - The API does not produce an error when the price is the same as an existing price.
* Fix           - After enabling the CSP API option, it does not display any error messages.

== 4.6.9 ==
* Feature       - Compatibility with HPOS feature.

== 4.6.8 ==
* Fix           - Group Table not found. #79585
* Fix           - Variations of Products with the Same Price are Displayed within a Range. #79585
* Fix           - Adding an EnDash Symbol for Variable Products. #79585
* Fix           - Unable to Retrieve Prices After Clicking 'Set Price' on the CSP Product Price Page. #80419
* Fix           - The issue where CSP price cannot be greater than the regular price or sale price. #80968
* Fix           - The Strikethrough issue when CSP price is not defined.
* Fix           - The issue related to Sales Tag when sale price is defined.
* Fix           - The Sales price range issue of variable product when CSP price is not defined.

== 4.6.7 ==
* Fix           - Sale Price not showing when it is less than CSP/Regular Price. #78036
* Fix           - Sale badge was not showing on CSP product. #78019
* Fix           - Sale badge was not showing on CSP table. #78246
* Fix           - Same Price in variable products unable to display Regular price on frontend page. #78135
* Tweak         - Variations titles instead of variations ID in DualList Box.

== 4.6.6 ==
* Feature  		- Compatibility with WordPress 6.0.

== 4.6.5 ==
* Fix  			- Group based prices miss the numbers after decimal places when comma is used as the decimal separator. #76597
* Fix  			- Import/Export scheduling does not work when cron gets triggered by the guest user. #76666
* Fix  			- User not found issue on the Wordpress multisite in the Import CSP rules feature. #76653
* Fix  			- Role based Global discount rules duplicate during import. #76646
* Fix  			- Deprecated function change. #76600
* Fix  			- Missing headers, inserted and updated statuses when downloading import report in case of a new import functionality. #76704
* Fix           - Not able to delete the rule using action delete icon. #76835
* Fix           - After deleting the User Group Rule from Search By & Delete, the extra rules are been getting listed. #76834
* Fix           - When trying to delete User Role from Search By & Delete, the loading icon keeps on rotating. #76832
* Fix           - In rsp-product, blank product_id rules are also getting Inserted. #76831
* Fix           - Added product_id header when importing using product sku. #76829
* Fix           - Fixed message issue in import report when product sku is not missing. #76828
* Fix           - The progress bar gets stuck, if we try to add already added same rule. #76827
* Fix           - CSV rule with empty %_discount and flat price is getting added. #76825
* Fix           - Fatal error when WooCommerce is not active. #76824
* Tweak  		- A filter to enable editing the CSP prices fetched in the WooCommerce Dashboard Orders. #76645
* Tweak         - A filter to add the suffix after CSP price. #76726

== 4.6.4 ==
* Fix  			- Issue with variable product price range when user specific pricing is not assigned.
* Fix  			- Issue on the simple product edit page when non-default decimal separetor used.

= 4.6.3 =
* Fix  			- Regular price text option in CSP display the price without tax.
* Fix  			- Deactivate/Activate Category pricing feature is not working.
* Fix  			- The strings in the cart discounts offer message are not translatable.
* Improvement	- Tab accessibility as a submenus to the CSP.
* Improvement	- Option to export all the pricing rules set by CSP as an archive.(Rule Backup)
* Improvement	- Filters included to disable CSP rule management from the product edit pages.
* Improvement	- It's now possible to set a rule with a 100% discount.
* Improvement	- Improved import feature for faster rule import, (option to revert back to the old feature).
* Feature  		- Scheduled Backups.
* Feature  		- Scheduled Imports.

= 4.6.2 =
* Fix			- Issue with saving the global discount rules.
* Improvement	- Compatibility tested with WordPress 5.6.0.
* Improvement	- Added several new filters to allow extending the functionality.

= 4.6.1 =
* Fix  		- Issue with the entity selection in the rules on the product edit page.

= 4.6.0 =
* Fix  		- Pricing issue with the bundled product having base price.
* Fix  		- Emails With the hyphen(-) character are not being supported in the CSP API.
* Fix  		- The issue with Manual Orders when a pre-saved(When CSP is disabled) order is being edited.
* Fix  		- CSP pricing sections are visible on the product edit pages of the custom product types.
* Fix  		- Incorrect positioning of the text for regular price & price descriptions when both the settings are enabled.
* Fix  		- The prices & % discount values in the product pricing tab, product edit page, are showing 4 decimal places.
* Feature  	- Import|Export functionality for Category Specific Pricing Rules & Global Discount Rules.
* Feature  	- Compatibility tested with WooCommerce v4.6.0 & WordPress 5.5.1.
* Security 	- When the user editor pro plugin is active, the privileged non-admin user gets access to the role administrator.
* Improvement - A filter added 'wdm_csp_filter_product_total_position' to enable repositioning the display of Product Total.
* Improvement - Reduced loading time on variable product pages.
* Improvement - Improvements in the admin pages.
* Improvement - Ajax-based user search & minor improvements in the search by page.
* Improvement - An option to download the product list(CSV) from the export page for the reference.

= 4.5.1 =
* Fix           - Issue with CSP rule edit section on product edit page after the wordpress update 5.5.0.
* Fix			- Import of CSVs created on mac devices. 
* Tweak         - A hook wdm_csp_filter_product_total_position is added to allow switching the position of product total on product pages.
* Improvement   - A custom event added after CSP price application on variation selection 'show_csp_for_variation'.

= 4.5.0 =
* Feature       - Global discounts.
* Feature       - An option to enable applyging rules defined for parent category to all of its child categories.
* Feature       - Compatibility with the plugin PEP.
* Fix           - Wrong values after the decimal on 'search by & delete' page when ',(comma)' is used as a decimal seperator.
* Fix           - Issue with taxed CSP price in price suffix when placeholders {price_including_tax} & {price_excluding_tax} are used.
* Fix           - Issue with the translation of the keyword 'Product Total:'.
* Fix           - No Strikethrough and sale badge on variable product when 'enable strikethrough' csp setting is active.
* Fix           - When price is same for all the variations CSP re-displays the price on variation selection on a product page.
* Tweak         - A hook wdm_csp_external_qty_limits is added to achieve compatibility with min-max quantity related plugins.
* Tweak         - Improved hook csp_filter_cart_discount_limits, to extend cart discount feature.
* Tweak         - Added a hook which allows to show quantity based price on a shop page.(wdm_csp_show_quantity_based_price_on_shop)
* Tweak         - Minimum batch size for import is reduced to 20.

= 4.4.4 =
* Fix           - Back end Order calculation issue when taxation is enabled.

= 4.4.3 =
* Feature       - Added a hook to enable importing CSP rules for all the products having the same SKU.
* Feature       - Added a hook that will allow applying user-specific global discounts/prices.
* Improvement   - Improved the load time of archive pages.
* Improvement   - Improvement in CSP API.
* Fix           - Category pricing data display issue (Duplicate entries displayed on search by page)
* Fix           - Deletion of a customer-specific rule log entry on the deletion of a subrule
* Fix           - Issue while saving the page having special offers shortcode
* Fix           - "null" is being displayed as a suffix for variable products when there's no suffix

= 4.4.2 =
* Fix           - Pricing rules issue for categories.

= 4.4.1 =
* Fix           - Fatal error on user deletion.
* Tweak         - Compatibility Tested with WC 3.9.1

= 4.4.0 =
* Feature       - API to manage CSP prices.
* Feature       - Allowing a 100% discount.
* Feature       - User Specific CSP Archive Page.
* Improvement   - An Option to disable category pricing feature.
* Improvement   - Changes in admin UI of category pricing.
* Tweak         - Switched the position of the category pricing tab & search by & delete tab
* Fix           - Warning On WP-Admin When Expired License is present.
* Fix           - Deletion from search by & delete not working when multiple groups are assigned to the user.

= 4.3.5 =
* Improvement   - Performance optimization.
* Improvement   - Admin page UI/UX changes.
* Fix           - Minor Bug Fixes.

= 4.3.4 =
* Improvement   - User interface changes for price editing. 
* Improvement   - Product price is now converted to respective currency before saving.
* Improvement   - Changes for price importing.

= 4.3.3 =
* Fix           - CSP prices not working when product price is set to zero.
* Fix           - Admin side order price not displaying correctly with zero quantity.

= 4.3.2 =
* Fix           - Error when fetching product details from a custom attribute in the CSP tab in the backend.
* Tweak         - Compatibility with WordPress 5.2.2 and WooCommerce 3.6.4.

= 4.3.1 =
* Tweak         - Added a new filter wdm_csp_filter_admin_product_id_search to search products by ID on the back-end while creating new rule.
* Tweak         - Improved UX while searching a product by ID.

= 4.3.0 =
* Feature       - User Based Specific Pricing. (Added a new Tab for this.)
* Feature       - Option for Price Description. (In CSP setting.)
* Improvement   - Improved User Interface (UI) for CSP product pricing settings.
* Improvement   - Added search filters for existing rules and delete rules.
* Fix           - Price is not getting saved properly if the site uses comma(,) as decimal separator and dot(.) as thousand separator.
* Fix           - Price is not getting saved correctly if the values are like (1.000,00).
* Fix           - Price is not showing up properly when the value is up to 4 decimal places in single product price settings.
* Fix           - The price displayed is a fixed price if it is set as a global rule and a discount rule is also applied.
* Fix           - Product price rules not saving if price value has multiple zeroes after decimal in single product pricing settings.
* Fix           - Category Based Pricing: Rules with zero discount are not saving.
* Fix           - CSP is not working with Elementor Plugin's latest version.

= 4.2.5 =
* Feature       - Added an option to set the min quantity and max quantity.
* Tweak         - Compatibility tested with WordPress 5.1 and WooCommerce 3.5.7.
* Tweak         - Added an option to hide the price of the products if CSP rules are not defined for the product.
* Tweak         - Removed all the code related to the price on call button.
* Fix           - Conflict with the min/max quantity plugin.
* Fix           - Regular price of the variable product is not strikethrough on the frontend for category and role-based pricing.

= 4.2.4 =
* Fix           - Fixed an issue where prices for variable products were not displayed on the shop page.
* Fix           - Compatibility issue when using the WooCommerce Advanced Bulk Edit plugin along with Customer Specific Pricing.
* Tweak         - Added a filter for price suffix for CSP prices.
* Tweak         - Compatibility with WooCommerce 3.5.4.

= 4.2.3 =
* Feature       - Added Compatibility with WordPress network setup (multisite).
* Feature       - Enabled to specify "Customer Specific Price" without specifying the "Regular Price".
* Feature       - Enabled to apply "Customer Specific Price" on "Sale Price".
* Feature       - Feedback tab on CSPs setting page.
* Fix           - High server resource consumption during bulk import fixed.

= 4.2.2 =
* Fix           - Issue related to Category based price application in WooCommerce reports section.
* Fix           - Issue related to role based price application in WooCommerce reports section.
* Fix           - Issue related to user based price application in WooCommerce reports section.
* Fix           - Pricing issue when the price is entered with thousand separator.
* Tweak         - Compatibility with WooCommerce 3.4.5.

= 4.2.1 =
* Fix           - Fixed the issue where CSP prices were not displayed on the store front-end due to WooCommerce 3.4.
* Tweak         - Compatible with WooCommerce 3.4.

= 4.2.0 =
* Feature       - Role based pricing for WooCommerce.
* Feature       - Option to apply customer specific pricing on sale price, to override the sale price of a product.
* Feature       - Customer specific pricing with minimum quantity.
* Feature       - Admin can now add prices from the single product edit page.
* Feature       - Product CSV import/export.
* Feature       - Price per quantity for role.
* Feature       - Price per quantity for user.
* Feature       - Custom price per user.
* Fix           - Fixed an issue where the price was not updated when a user logged in or out.
* Fix           - Solved some of the issues related to product bundles.
* Fix           - Solved some of the issues related to product add-ons.
* Fix           - Solved issues related to WooCommerce price formatters.
* Fix           - Solved issues related to price per quantity on shop page and product page.
* Tweak         - Compatible with WordPress 4.9.4 & WooCommerce 3.3.1.

= 4.1.0 =
* Feature       - Category Based Pricing .
* Feature       - Category based pricing option included in the search results under 'Search By' tab.
* Tweak         - Replaced placeholder for minimum quantity with by adding default minimum quantity for prices.
* Tweak         - 'Pricing Manager' tab renamed as 'Product Pricing'.
* Tweak         - 'Search By' option moved to the main tab of the plugin settings.
* Fix           - Resolved issue for restoring set prices when editing price rules.

= 4.0.0 =
* Improvement   - Initial Release of the Product.

== Frequently Asked Questions ==

= Help! I lost my license key? =
In case you have misplaced your purchased product license key, kindly go back and retrieve your purchase receipt id from your mailbox. Use this receipt id to make a support request to retrieve your license key.

= How do I contact you for support? =
You can direct your support request to us, using the Support form on our website.

= What will happen if my license expires? =
Every purchased license is valid for one year from the date of purchase. During this time you will recieve free updates and support. If the license expires, you will still be able to use CSP, but you will not recieve any support or updates.

= Do you have a refund policy? =
Yes. Refunds will be provided under the following conditions: 
-Refunds will be granted only if CSP does not work on your site and has integration issues, which we are unable to fix, even after support requests have been made.
-Refunds will not be granted if you have no valid reason to discontinue using the plugin. CSP only guarantees compatibility with the
WooCommerce plugin.
-Refund requests will be rejected for reasons of incompatibility with third party plugins.

= I have activated plugin but I still do not see an option to add pricing for users. What to do? =
Make sure that you have entered license key for the product. To do so, you can go to 'CSP License' page found as a submenu under 'Plugins' menu. Once you have activated the license successfully, you will be able to add pricing for users by going to Product create/edit page. So you can add pricing on per product basis.

= What kind of users does this plugin support? =
You can add pricing for any user with an account on your website.

= Is there any limit on how many customer-price pairs can be added? =
No, there is no such limit. You can add as many customer-price pairs as you want.

== Upgrade Notice ==

= 4.7 =
4.7 is a major update. Make a full site database backup, If you have done modifications in the plugin files. Please make sure to take backup of the plugin as well, and [review update best practices](https://docs.woocommerce.com/document/how-to-update-your-site) before upgrading.
