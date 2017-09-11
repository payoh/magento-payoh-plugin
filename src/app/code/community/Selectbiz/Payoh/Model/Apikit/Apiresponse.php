<?php
class Selectbiz_Payoh_Model_Apikit_Apiresponse{
	
	function __construct($xmlResponseArr) {
		$xmlResponse = $xmlResponseArr[0];
		$this->lwXml = $xmlResponse;
		if (isset($xmlResponse->E)){
			$this->lwError = Mage::getModel("selectbiz_payoh/apikit_apimodels_lwError",array($xmlResponse->E->Code, $xmlResponse->E->Msg));
		}
    }
	
	/**
     * lwXml
     * @var SimpleXMLElement
     */
    public $lwXml;
	
	/**
     * lwError
     * @var Selectbiz_Payoh_Model_Apikit_Apimodels_LwError
     */
    public $lwError;
	
	/**
     * wallet
     * @var Selectbiz_Payoh_Model_Apikit_Apimodels_Wallet
     */
    public $wallet;
	
	/**
     * operations
     * @var array Selectbiz_Payoh_Model_Apikit_Apimodels_Operation
     */
    public $operations;
	
	/**
     * kycDoc
     * @var Selectbiz_Payoh_Model_Apikit_Apimodels_KycDoc
     */
    public $kycDoc;
	
	/**
     * iban
     * @var Selectbiz_Payoh_Model_Apikit_Apimodels_Iban
     */
    public $iban;
	
	/**
     * sddMandate
     * @var Selectbiz_Payoh_Model_Apikit_Apimodels_SddMandate
     */
    public $sddMandate;
}

?>