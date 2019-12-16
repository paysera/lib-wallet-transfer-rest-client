<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class ClientIdentifier extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getPersonalNumber()
    {
        return $this->get('personal_number');
    }
    /**
     * @param string $personalNumber
     * @return $this
     */
    public function setPersonalNumber($personalNumber)
    {
        $this->set('personal_number', $personalNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCustomerCode()
    {
        return $this->get('customer_code');
    }
    /**
     * @param string $customerCode
     * @return $this
     */
    public function setCustomerCode($customerCode)
    {
        $this->set('customer_code', $customerCode);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getTaxPayerCode()
    {
        return $this->get('tax_payer_code');
    }
    /**
     * @param string $taxPayerCode
     * @return $this
     */
    public function setTaxPayerCode($taxPayerCode)
    {
        $this->set('tax_payer_code', $taxPayerCode);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getWorkerIdentificationNumber()
    {
        return $this->get('worker_identification_number');
    }
    /**
     * @param string $workerIdentificationNumber
     * @return $this
     */
    public function setWorkerIdentificationNumber($workerIdentificationNumber)
    {
        $this->set('worker_identification_number', $workerIdentificationNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->get('passport_number');
    }
    /**
     * @param string $passportNumber
     * @return $this
     */
    public function setPassportNumber($passportNumber)
    {
        $this->set('passport_number', $passportNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->get('social_security_number');
    }
    /**
     * @param string $socialSecurityNumber
     * @return $this
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->set('social_security_number', $socialSecurityNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDriverLicenseNumber()
    {
        return $this->get('driver_license_number');
    }
    /**
     * @param string $driverLicenseNumber
     * @return $this
     */
    public function setDriverLicenseNumber($driverLicenseNumber)
    {
        $this->set('driver_license_number', $driverLicenseNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNonresidentRegistrationNumber()
    {
        return $this->get('nonresident_registration_number');
    }
    /**
     * @param string $nonresidentRegistrationNumber
     * @return $this
     */
    public function setNonresidentRegistrationNumber($nonresidentRegistrationNumber)
    {
        $this->set('nonresident_registration_number', $nonresidentRegistrationNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCompanyCode()
    {
        return $this->get('company_code');
    }
    /**
     * @param string $companyCode
     * @return $this
     */
    public function setCompanyCode($companyCode)
    {
        $this->set('company_code', $companyCode);
        return $this;
    }
    /**
     * @return ClientIdentifierTypeDateAndPlaceOfBirth|null
     */
    public function getDateAndPlaceOfBirth()
    {
        if ($this->get('date_and_place_of_birth') === null) {
            return null;
        }
        return (new ClientIdentifierTypeDateAndPlaceOfBirth())->setDataByReference($this->getByReference('date_and_place_of_birth'));
    }
    /**
     * @param ClientIdentifierTypeDateAndPlaceOfBirth $dateAndPlaceOfBirth
     * @return $this
     */
    public function setDateAndPlaceOfBirth(ClientIdentifierTypeDateAndPlaceOfBirth $dateAndPlaceOfBirth)
    {
        $this->setByReference('date_and_place_of_birth', $dateAndPlaceOfBirth->getDataByReference());
        return $this;
    }
    /**
     * @return ClientIdentifierTypeOther|null
     */
    public function getOther()
    {
        if ($this->get('other') === null) {
            return null;
        }
        return (new ClientIdentifierTypeOther())->setDataByReference($this->getByReference('other'));
    }
    /**
     * @param ClientIdentifierTypeOther $other
     * @return $this
     */
    public function setOther(ClientIdentifierTypeOther $other)
    {
        $this->setByReference('other', $other->getDataByReference());
        return $this;
    }
}
