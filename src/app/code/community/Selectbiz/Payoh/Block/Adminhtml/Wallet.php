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
 * Wallet admin block
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Block_Adminhtml_Wallet extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * constructor
     *
     * @access public
     * @return void
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function __construct()
    {
        $this->_controller         = 'adminhtml_wallet';
        $this->_blockGroup         = 'selectbiz_payoh';
        parent::__construct();
        $this->_headerText         = Mage::helper('selectbiz_payoh')->__('Wallet');
        $this->_removeButton('add');
        //$this->_updateButton('add', 'label', Mage::helper('selectbiz_payoh')->__('Add Wallet'));

    }
}
