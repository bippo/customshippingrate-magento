# Admin Custom Shipping Rate

Original extension: http://www.magentocommerce.com/magento-connect/i960/extension/1477/admin-custom-shipping-rate
Bippo fork on GitHub: https://github.com/bippo/customshippingrate-magento

Please note! Magento version 1.3.2 or higher is *required* to use this extension. Please make sure your Magento install is version 1.3.2 or higher before installing. Also note that this is NOT a per product shipping module.

Also note that if you wish to install the latest 1.5.0 version of this extension, you must set your Prefered State to Beta under the settings tab of your Magento Connect Manager. If you do not it will install the older 1.4.7 version.

Adds ability to specify a custom shipping rate and title when creating a new order in backend. This allows you to utilize any shipping method and price you want, even if it's not available to customers on the front end.

The extension is based on code found in this thread: http://www.magentocommerce.com/boards/viewthread/14264/

Thanks go out to szotyi for getting this started and to everyone else that helped test this.

## Version history
* 1.6.1 - update quote model to allow zero price custom rate, added by [adpeate](https://github.com/adpeate/customshippingrate-magento/commit/e9503353b2187b838b9d021a4c9d9b7e7fb291cf) on 2 August 2019
* 1.6.0 - Complete module rework for Magento 1.9 by [ThomasNegeli](https://github.com/ThomasNegeli/customshippingrate-magento/commit/7aa8bd62fb82e587ee050bdeb31274431561c348) on 5 September 2017
* 1.5.3 - Portuguese localization added by [MaWoScha](https://github.com/MaWoScha) on 24 September 2015
* 1.5.2 - Spanish localization added by [MaWoScha](https://github.com/MaWoScha) on 11 November 2014
* 1.5.1 - German localization added by [BenRoe](https://github.com/ThomasNegeli/customshippingrate-magento/commit/dc52053beac7976b35b833f1c1261192db93d33d) on 2 May 2013
* 1.5.0 - Original Version from [Admin Custom Shipping Rate](http://www.magentocommerce.com/magento-connect/i960/extension/1477/admin-custom-shipping-rate) on 30 January 2012
* 1.6.0 - Complete module rework for Magento 1.9

## Known Issues

There is a known issue with this extension if you are charging tax on shipping. As of this writing I have not found a confirmed solution that works for everyone. Please see this thread for more info:

http://www.magentocommerce.com/boards/viewthread/214206/

## Uninstall Instructions

After uninstalling this extension through your Magento Connect Manager, you may have to run the following SQL query on your database. This can be done through phpMyAdmin or equivalent. This may only be necessary in Magento 1.3. I have not found any issue with Magento 1.4 and leaving this info in the database, but your results may vary.

bc. delete FROM `core_config_data` WHERE path like "carriers/customshippingrate%";
