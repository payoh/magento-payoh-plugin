<?php
/**
 * Selectbiz_Payoh extension
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 * 
 * @category       Selectbiz
 * @package        Selectbiz_Payoh
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Moneyout resource model
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Model_Resource_Moneyout extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * constructor
     *
     * @access public
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function _construct()
    {
        $this->_init('selectbiz_payoh/moneyout', 'moneyout_id');
    }
}
