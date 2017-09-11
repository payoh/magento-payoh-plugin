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
 * Wallet edit form tab
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Block_Adminhtml_Wallet_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare the form
     *
     * @access protected
     * @return Selectbiz_Payoh_Block_Adminhtml_Wallet_Edit_Tab_Form
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('wallet_');
        $form->setFieldNameSuffix('wallet');
        $this->setForm($form);
        $fieldset = $form->addFieldset(
            'wallet_form',
            array('legend' => Mage::helper('selectbiz_payoh')->__('Wallet'))
        );

        $fieldset->addField(
            'lw_id',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Lemonway ID'),
                'name'  => 'lw_id',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'customer_id',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Customer ID'),
                'name'  => 'customer_id',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'wallet_id',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Wallet ID'),
                'name'  => 'wallet_id',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'is_admin',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Is Admin'),
                'name'  => 'is_admin',
            'required'  => true,
            'class' => 'required-entry',

            'values'=> array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('selectbiz_payoh')->__('Yes'),
                ),
                array(
                    'value' => 0,
                    'label' => Mage::helper('selectbiz_payoh')->__('No'),
                ),
            ),
           )
        );

        $fieldset->addField(
            'customer_email',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Email'),
                'name'  => 'customer_email',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'customer_prefix',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Prefix'),
                'name'  => 'customer_prefix',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'customer_firstname',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Firstname'),
                'name'  => 'customer_firstname',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'customer_lastname',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Lastname'),
                'name'  => 'customer_lastname',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'billing_address_street',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Street'),
                'name'  => 'billing_address_street',

           )
        );

        $fieldset->addField(
            'billing_address_postcode',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Postcode'),
                'name'  => 'billing_address_postcode',

           )
        );

        $fieldset->addField(
            'billing_address_city',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('City'),
                'name'  => 'billing_address_city',

           )
        );

        $fieldset->addField(
            'billing_address_country',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Country'),
                'name'  => 'billing_address_country',

            'values'=> Mage::getResourceModel('directory/country_collection')->toOptionArray(),
           )
        );

        $fieldset->addField(
            'billing_address_phone',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Phone Number'),
                'name'  => 'billing_address_phone',

           )
        );

        $fieldset->addField(
            'billing_address_mobile',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Mobile Number'),
                'name'  => 'billing_address_mobile',

           )
        );

        $fieldset->addField(
            'customer_dob',
            'date',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Dob'),
                'name'  => 'customer_dob',

            'image' => $this->getSkinUrl('images/grid-cal.gif'),
            'format'  => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
           )
        );

        $fieldset->addField(
            'is_company',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Is company'),
                'name'  => 'is_company',

            'values'=> array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('selectbiz_payoh')->__('Yes'),
                ),
                array(
                    'value' => 0,
                    'label' => Mage::helper('selectbiz_payoh')->__('No'),
                ),
            ),
           )
        );

        $fieldset->addField(
            'company_name',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Company name'),
                'name'  => 'company_name',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'company_website',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Company website'),
                'name'  => 'company_website',
            'required'  => true,
            'class' => 'required-entry',

           )
        );

        $fieldset->addField(
            'company_description',
            'textarea',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Company description'),
                'name'  => 'company_description',

           )
        );

        $fieldset->addField(
            'company_id_number',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Company ID number'),
                'name'  => 'company_id_number',

           )
        );

        $fieldset->addField(
            'is_debtor',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Is debtor'),
                'name'  => 'is_debtor',

            'values'=> array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('selectbiz_payoh')->__('Yes'),
                ),
                array(
                    'value' => 0,
                    'label' => Mage::helper('selectbiz_payoh')->__('No'),
                ),
            ),
           )
        );

        $fieldset->addField(
            'customer_nationality',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Nationality'),
                'name'  => 'customer_nationality',

            'values'=> Mage::getResourceModel('directory/country_collection')->toOptionArray(),
           )
        );

        $fieldset->addField(
            'customer_birth_city',
            'text',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('City of Birth'),
                'name'  => 'customer_birth_city',

           )
        );

        $fieldset->addField(
            'customer_birth_country',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Birth country'),
                'name'  => 'customer_birth_country',

            'values'=> Mage::getResourceModel('directory/country_collection')->toOptionArray(),
           )
        );

        $fieldset->addField(
            'payer_or_beneficiary',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Payer or beneficiary'),
                'name'  => 'payer_or_beneficiary',

            'values'=> Mage::getModel('selectbiz_payoh/wallet_attribute_source_payerorbeneficiary')->getAllOptions(true),
           )
        );

        $fieldset->addField(
            'is_onetime_customer',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Is One time customer'),
                'name'  => 'is_onetime_customer',
            'required'  => true,
            'class' => 'required-entry',

            'values'=> array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('selectbiz_payoh')->__('Yes'),
                ),
                array(
                    'value' => 0,
                    'label' => Mage::helper('selectbiz_payoh')->__('No'),
                ),
            ),
           )
        );

        $fieldset->addField(
            'is_default',
            'select',
            array(
                'label' => Mage::helper('selectbiz_payoh')->__('Is default'),
                'name'  => 'is_default',
            'required'  => true,
            'class' => 'required-entry',

            'values'=> array(
                array(
                    'value' => 1,
                    'label' => Mage::helper('selectbiz_payoh')->__('Yes'),
                ),
                array(
                    'value' => 0,
                    'label' => Mage::helper('selectbiz_payoh')->__('No'),
                ),
            ),
           )
        );
        $fieldset->addField(
            'status',
            'select',
            array(
                'label'  => Mage::helper('selectbiz_payoh')->__('Status'),
                'name'   => 'status',
                'values' => array(
                    array(
                        'value' => 1,
                        'label' => Mage::helper('selectbiz_payoh')->__('Enabled'),
                    ),
                    array(
                        'value' => 0,
                        'label' => Mage::helper('selectbiz_payoh')->__('Disabled'),
                    ),
                ),
            )
        );
        $formValues = Mage::registry('current_wallet')->getDefaultValues();
        if (!is_array($formValues)) {
            $formValues = array();
        }
        if (Mage::getSingleton('adminhtml/session')->getWalletData()) {
            $formValues = array_merge($formValues, Mage::getSingleton('adminhtml/session')->getWalletData());
            Mage::getSingleton('adminhtml/session')->setWalletData(null);
        } elseif (Mage::registry('current_wallet')) {
            $formValues = array_merge($formValues, Mage::registry('current_wallet')->getData());
        }
        $form->setValues($formValues);
        return parent::_prepareForm();
    }
}
