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
 * Moneyout model
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Model_Moneyout extends Mage_Core_Model_Abstract
{
    /**
     * Entity code.
     * Can be used as part of method name for entity processing
     */
    const ENTITY    = 'selectbiz_payoh_moneyout';
    const CACHE_TAG = 'selectbiz_payoh_moneyout';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'selectbiz_payoh_moneyout';

    /**
     * Parameter name in event
     *
     * @var string
     */
    protected $_eventObject = 'moneyout';

    /**
     * constructor
     *
     * @access public
     * @return void
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('selectbiz_payoh/moneyout');
    }

    /**
     * before save moneyout
     *
     * @access protected
     * @return Selectbiz_Payoh_Model_Moneyout
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $now = Mage::getSingleton('core/date')->gmtDate();
        if ($this->isObjectNew()) {
            $this->setCreatedAt($now);
        }
        $this->setUpdatedAt($now);
        return $this;
    }

    /**
     * save moneyout relation
     *
     * @access public
     * @return Selectbiz_Payoh_Model_Moneyout
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _afterSave()
    {
        return parent::_afterSave();
    }
    
}
