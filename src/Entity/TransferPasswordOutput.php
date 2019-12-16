<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferPasswordOutput extends Entity
{
    const STATUS_PENDING = 'pending';
    const STATUS_UNLOCKED = 'unlocked';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string|null
     */
    public function getStatus()
    {
        return $this->get('status');
    }
    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->set('status', $status);
        return $this;
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
