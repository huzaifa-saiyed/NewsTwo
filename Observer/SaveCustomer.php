<?php
namespace Kitchen\News\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Kitchen\News\Model\AddressFactory;
use Magento\Framework\App\RequestInterface;

class SaveCustomer implements ObserverInterface
{
    protected $customerRepository;
    protected $cpaddressFactory;
    protected $request;

    public function __construct(
        CustomerRepositoryInterface $customerRepository,
        AddressFactory $cpaddressFactory,
        RequestInterface $request
    ) {
        $this->customerRepository = $customerRepository;
        $this->cpaddressFactory = $cpaddressFactory;
        $this->request = $request;
    }

    public function execute(Observer $observer)
    {
        $kstreet = $this->request->getParam('kstreet');
        $kcity = $this->request->getParam('kcity');
        $kregion = $this->request->getParam('kregion');
        $kpostcode = $this->request->getParam('kpostcode');
        $kcountry = $this->request->getParam('kcountry');
        $custom_customer_attribute = $this->request->getParam('custom_customer_attribute');
        $customer = $observer->getEvent()->getCustomer();
        $customerID = $customer->getId();

        
        $this->saveToCustomTable($kstreet, $kcity, $kregion, $kpostcode, $kcountry, $custom_customer_attribute, $customerID);
    }

    protected function saveToCustomTable($kstreet, $kcity, $kregion, $kpostcode, $kcountry, $custom_customer_attribute, $customerID)
    {
        $addressModel = $this->cpaddressFactory->create();
        $addressModel->setStreet($kstreet);
        $addressModel->setCity($kcity);
        $addressModel->setRegion($kregion);
        $addressModel->setPostcode($kpostcode);
        $addressModel->setCountry($kcountry);
        $addressModel->setAttr($custom_customer_attribute);
        $addressModel->setCustomerId($customerID);
        $addressModel->save();
    }
}


 