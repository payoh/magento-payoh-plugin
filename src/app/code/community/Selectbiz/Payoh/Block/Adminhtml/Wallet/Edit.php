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
 * Wallet admin edit form
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Block_Adminhtml_Wallet_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
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
        parent::__construct();
        $this->_blockGroup = 'selectbiz_payoh';
        $this->_controller = 'adminhtml_wallet';
        $this->_updateButton(
            'save',
            'label',
            Mage::helper('selectbiz_payoh')->__('Save Wallet')
        );
        $this->_updateButton(
            'delete',
            'label',
            Mage::helper('selectbiz_payoh')->__('Delete Wallet')
        );
        $this->_addButton(
            'saveandcontinue',
            array(
                'label'   => Mage::helper('selectbiz_payoh')->__('Save And Continue Edit'),
                'onclick' => 'saveAndContinueEdit()',
                'class'   => 'save',
            ),
            -100
        );
        $this->_formScripts[] = "
            function saveAndContinueEdit() {
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * get the edit form header
     *
     * @access public
     * @return string
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function getHeaderText()
    {
        if (Mage::registry('current_wallet') && Mage::registry('current_wallet')->getId()) {
            return Mage::helper('selectbiz_payoh')->__(
                "Edit Wallet '%s'",
                $this->escapeHtml(Mage::registry('current_wallet')->getWalletId())
            );
        } else {
            return Mage::helper('selectbiz_payoh')->__('Add Wallet');
        }
    }
}
