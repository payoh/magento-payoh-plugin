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
 * Moneyout collection resource model
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Model_Resource_Moneyout_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected $_joinedFields = array();

    /**
     * constructor
     *
     * @access public
     * @return void
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('selectbiz_payoh/moneyout');
    }

    /**
     * get moneyouts as array
     *
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _toOptionArray($valueField='moneyout_id', $labelField='moneyout_id', $additional=array())
    {
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }

    /**
     * get options hash
     *
     * @access protected
     * @param string $valueField
     * @param string $labelField
     * @return array
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _toOptionHash($valueField='moneyout_id', $labelField='moneyout_id')
    {
        return parent::_toOptionHash($valueField, $labelField);
    }

    /**
     * Get SQL for get record count.
     * Extra GROUP BY strip added.
     *
     * @access public
     * @return Varien_Db_Select
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function getSelectCountSql()
    {
        $countSelect = parent::getSelectCountSql();
        $countSelect->reset(Zend_Db_Select::GROUP);
        return $countSelect;
    }
}
