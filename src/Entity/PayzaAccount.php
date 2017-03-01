<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class PayzaAccount extends Entity
{
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->get('email');
    }
    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->set('email', $email);
        return $this;
    }
}
