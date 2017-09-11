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
 * Wallet admin controller
 *
 * @category    Selectbiz
 * @package     Selectbiz_Payoh
 * @author Kassim Belghait kassim@sirateck.com
 */
class Selectbiz_Payoh_Adminhtml_Payoh_MoneyoutController extends Selectbiz_Payoh_Controller_Adminhtml_Payoh
{


    /**
     * view action
     *
     * @access public
     * @return void
     * @author Kassim Belghait kassim@sirateck.com
     */
    public function payAction()
    {
        $this->loadLayout();
        $this->_title(Mage::helper('selectbiz_payoh')->__('Payoh'))
             ->_title(Mage::helper('selectbiz_payoh')->__('MoneyOut'));
        $this->renderLayout();
    }
    
    public function  payPostAction(){
        
        if ($this->getRequest()->isPost()) {
            
            $iban = "";
            
            $walletId= $this->getRequest()->getPost('wallet_id', false);
            $bal= (float)$this->getRequest()->getPost('bal', 0);
            $balFormated = Mage::helper("core")->formatPrice((float)$bal);
            $ibanId = 0;
            $ibanIds = $this->getRequest()->getPost('iban_id', array());
            if(count($ibanIds) > 0)
            {
                $ibanId = current($ibanIds);
                $iban = $this->getRequest()->getPost('iban_' . $ibanId, "");
            }
            $amountToPay = (float)str_replace(",", ".",$this->getRequest()->getPost('amountToPay', 0));
            $amountFormated = Mage::helper("core")->formatPrice((float)$amountToPay);
            
            if($amountToPay > $bal)
            {
                $this->_getSession()->addError($this->__("You can't paid amount upper of your balance amount: %s", $balFormated));
                $this->_redirect("*/*/pay");
                return $this;
            }
            
            if($walletId && $ibanId && $amountToPay > 0 && $bal > 0)
            {
                try {
                    $params = array(
                            "wallet" => $walletId,
                            "amountTot" => sprintf("%.2f", $amountToPay),
                            "amountCom" => sprintf("%.2f", (float)0),
                            "message" => $this->__("Moneyout from %s", Mage::app()->getStore()->getName()),
                            "ibanId" => $ibanId,
                            "autoCommission" => 0,
                    );
                    //Init APi kit
                    /* @var $kit Selectbiz_Payoh_Model_Apikit_Kit */
                    $kit = Mage::getSingleton('selectbiz_payoh/apikit_kit');
                    $apiResponse = $kit->MoneyOut($params);
                    
                    if($apiResponse->lwError)
                        Mage::throwException($apiResponse->lwError->getMessage());
                    
                    if(count($apiResponse->operations))
                    {
                        /* @var $op Selectbiz_Payoh_Model_Apikit_Apimodels_Operation */
                        $op = $apiResponse->operations[0];
                        if($op->getHpayId())
                        {
                            
                            $this->_getSession()->addSuccess($this->__("You paid %s to your Iban %s from your wallet <b>%s</b>", $amountFormated, $iban, $walletId));
                        }
                        else {
                            Mage::throwException($this->__("An error occurred. Please contact support."));
                        }
                    }
                    
                    
                } catch (Exception $e) {
                    
                    Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                    
                }

            }
        }
    
        $this->_redirect('*/*/pay');
    }

    /**
     * Check if admin has permissions to visit related pages
     *
     * @access protected
     * @return boolean
     * @author Kassim Belghait kassim@sirateck.com
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('sales/selectbiz_payoh/moneyout');
    }
    
    /**
     * 
     * @return Selectbiz_Payoh_Model_Method_Webkit
     */
    protected function getMethodInstance(){
        return MAge::getSingleton('selectbiz_payoh/method_webkit');
    }
}
