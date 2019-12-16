<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferPassword extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->get('value');
    }
    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->set('value', $value);
        return $this;
    }
}
