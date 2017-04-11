<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferBadRequest extends Entity
{
    /**
     * @return string
     */
    public function getError()
    {
        return $this->get('error');
    }
    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        $this->set('error', $error);
        return $this;
    }
}
