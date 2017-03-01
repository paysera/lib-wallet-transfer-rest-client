<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransfersFilter extends Entity
{
    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedDateFrom()
    {
        return (new \DateTimeImmutable())->setTimestamp($this->get('created_date_from'));
    }
    /**
     * @param \DateTimeInterface $createdDateFrom
     * @return $this
     */
    public function setCreatedDateFrom(\DateTimeInterface $createdDateFrom)
    {
        $this->set('created_date_from', $createdDateFrom->getTimestamp());
        return $this;
    }
    /**
     * @return \DateTimeImmutable|null
     */
    public function getCreatedDateTo()
    {
        return (new \DateTimeImmutable())->setTimestamp($this->get('created_date_to'));
    }
    /**
     * @param \DateTimeInterface $createdDateTo
     * @return $this
     */
    public function setCreatedDateTo(\DateTimeInterface $createdDateTo)
    {
        $this->set('created_date_to', $createdDateTo->getTimestamp());
        return $this;
    }
    /**
     * @return string|null
     */
    public function getCreditAccountNumber()
    {
        return $this->get('credit_account_number');
    }
    /**
     * @param string $creditAccountNumber
     * @return $this
     */
    public function setCreditAccountNumber($creditAccountNumber)
    {
        $this->set('credit_account_number', $creditAccountNumber);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getDebitAccountNumber()
    {
        return $this->get('debit_account_number');
    }
    /**
     * @param string $debitAccountNumber
     * @return $this
     */
    public function setDebitAccountNumber($debitAccountNumber)
    {
        $this->set('debit_account_number', $debitAccountNumber);
        return $this;
    }
    /**
     * @return any|null
     */
    public function getStatuses()
    {
        return (new any())->setDataByReference($this->getByReference('statuses'));
    }
    /**
     * @param any $statuses
     * @return $this
     */
    public function setStatuses(any $statuses)
    {
        $this->setByReference('statuses', $statuses->getDataByReference());
        return $this;
    }
}
