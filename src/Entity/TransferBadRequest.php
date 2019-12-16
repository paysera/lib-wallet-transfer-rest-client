<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferBadRequest extends Entity
{
    const ERROR_LIMITS_EXCEEDED = 'limits_exceeded';
    const ERROR_NOT_ENOUGH_FUNDS = 'not_enough_funds';
    const ERROR_INVALID_PAYER_ACCOUNT = 'invalid_payer_account';
    const ERROR_INVALID_PARAMETERS = 'invalid_parameters';
    const ERROR_PAYMENT_TO_SAME_ACCOUNT = 'payment_to_same_account';
    const ERROR_INVALID_PASSWORD = 'invalid_password';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

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
