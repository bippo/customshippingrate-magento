<?php
/**
 * Admin Custom Shipping Rate
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to jeffk@industrialtechware.com so we can send you a copy immediately.
 *
 * @category   Indust
 * @package    Indust_CustomShippingRate
 * @author     Jeff Kieke <jeffk@industrialtechware.com>
 * @copyright  Copyright (c) 2011, Jeff Kieke
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Indust_CustomShippingRate_Model_Sales_Order_Create extends Mage_Adminhtml_Model_Sales_Order_Create
{
    /**
     * Parse data retrieved from request
     *
     * @param   array $data
     * @return  Mage_Adminhtml_Model_Sales_Order_Create
     */
    public function importPostData($data)
    {

        parent::importPostData($data);

        if (isset($data['shipping_amount'])) {
            $shippingPrice = $this->_parseShippingPrice($data['shipping_amount']);
            $this->getQuote()->getShippingAddress()->setShippingAmount($shippingPrice);
        }

        if (isset($data['base_shipping_amount'])) {
            $baseShippingPrice = $this->_parseShippingPrice($data['base_shipping_amount']);
            $this->getQuote()->getShippingAddress()->setBaseShippingAmount($baseShippingPrice, true);
        }

        if (isset($data['shipping_description'])) {
            $this->getQuote()->getShippingAddress()->setShippingDescription($data['shipping_description']);
        }

        return $this;
    }

    protected function _parseShippingPrice($price)
    {
        $price = Mage::app()->getLocale()->getNumber($price);
        $price = $price > 0 ? $price : 0;
        return $price;
    }

}
