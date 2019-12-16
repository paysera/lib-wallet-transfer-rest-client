<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferInitiator extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return integer|null
     */
    public function getUserId()
    {
        return $this->get('user_id');
    }
    /**
     * @param integer $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->set('user_id', $userId);
        return $this;
    }
    /**
     * @return integer|null
     */
    public function getClientId()
    {
        return $this->get('client_id');
    }
    /**
     * @param integer $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->set('client_id', $clientId);
        return $this;
    }
}
