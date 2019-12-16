<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class AdditionalInformation extends Entity
{
    const TYPE_NATURAL = 'natural';
    const TYPE_LEGAL = 'legal';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->get('type');
    }
    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->set('type', $type);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCity()
    {
        return $this->get('city');
    }
    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->set('city', $city);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getState()
    {
        return $this->get('state');
    }
    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->set('state', $state);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCountry()
    {
        return $this->get('country');
    }
    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->set('country', $country);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->get('postal_code');
    }
    /**
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->set('postal_code', $postalCode);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getBankBranchCode()
    {
        return $this->get('bank_branch_code');
    }
    /**
     * @param string $bankBranchCode
     * @return $this
     */
    public function setBankBranchCode($bankBranchCode)
    {
        $this->set('bank_branch_code', $bankBranchCode);
        return $this;
    }
}
