<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class ClientIdentifierTypeDateAndPlaceOfBirth extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->get('date_of_birth');
    }
    /**
     * @param string $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->set('date_of_birth', $dateOfBirth);
        return $this;
    }
    /**
     * @return string
     */
    public function getCityOfBirth()
    {
        return $this->get('city_of_birth');
    }
    /**
     * @param string $cityOfBirth
     * @return $this
     */
    public function setCityOfBirth($cityOfBirth)
    {
        $this->set('city_of_birth', $cityOfBirth);
        return $this;
    }
    /**
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->get('country_of_birth');
    }
    /**
     * @param string $countryOfBirth
     * @return $this
     */
    public function setCountryOfBirth($countryOfBirth)
    {
        $this->set('country_of_birth', $countryOfBirth);
        return $this;
    }
}
