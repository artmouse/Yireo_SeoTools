<?php
/**
 * Yireo SeoTools for Magento 
 *
 * @package     Yireo_SeoTools
 * @author      Yireo (http://www.yireo.com/)
 * @copyright   Copyright 2015 Yireo (http://www.yireo.com/)
 * @license     Open Source License
 */

/**
 * SeoTools helper for layered navigation
 */
class Yireo_SeoTools_Helper_Layer extends Mage_Core_Helper_Abstract
{
    /*
     * Method to get the current layered navigation filters
     *
     * @access public
     * @param null
     * @return array
     */
    public function getFilters()
    {
        $filters = Mage::getSingleton('catalog/layer')->getState()->getFilters();
        return $filters;
    }    
}
