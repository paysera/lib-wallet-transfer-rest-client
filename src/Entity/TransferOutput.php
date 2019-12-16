<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferOutput extends Entity
{
    const STATUS_NEW = 'new';
    const STATUS_REGISTERED = 'registered';
    const STATUS_WAITING_FUNDS = 'waiting_funds';
    const STATUS_WAITING_REGISTRATION = 'waiting_registration';
    const STATUS_WAITING_PASSWORD = 'waiting_password';
    const STATUS_RESERVED = 'reserved';
    const STATUS_FROZEN = 'frozen';
    const STATUS_PROCESSING = 'processing';
    const STATUS_DONE = 'done';
    const STATUS_REJECTED = 'rejected';
    const STATUS_REVOKED = 'revoked';
    const STATUS_FAILED = 'failed';

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->get('id');
    }
    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->set('id', $id);
        return $this;
    }
    /**
     * @return string
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
     * @return TransferBeneficiary
     */
    public function getBeneficiary()
    {
        return (new TransferBeneficiary())->setDataByReference($this->getByReference('beneficiary'));
    }
    /**
     * @param TransferBeneficiary $beneficiary
     * @return $this
     */
    public function setBeneficiary(TransferBeneficiary $beneficiary)
    {
        $this->setByReference('beneficiary', $beneficiary->getDataByReference());
        return $this;
    }
    /**
     * @return TransferInitiator
     */
    public function getInitiator()
    {
        return (new TransferInitiator())->setDataByReference($this->getByReference('initiator'));
    }
    /**
     * @param TransferInitiator $initiator
     * @return $this
     */
    public function setInitiator(TransferInitiator $initiator)
    {
        $this->setByReference('initiator', $initiator->getDataByReference());
        return $this;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return (new \DateTimeImmutable())->setTimestamp($this->get('created_at'));
    }
    /**
     * @param \DateTimeInterface $createdAt
     * @return $this
     */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {
        $this->set('created_at', $createdAt->getTimestamp());
        return $this;
    }
    /**
     * @return \DateTimeImmutable|null
     */
    public function getPerformedAt()
    {
        if ($this->get('performed_at') === null) {
            return null;
        }
        return (new \DateTimeImmutable())->setTimestamp($this->get('performed_at'));
    }
    /**
     * @param \DateTimeInterface $performedAt
     * @return $this
     */
    public function setPerformedAt(\DateTimeInterface $performedAt)
    {
        $this->set('performed_at', $performedAt->getTimestamp());
        return $this;
    }
    /**
     * @return TransferFailureStatus|null
     */
    public function getFailureStatus()
    {
        if ($this->get('failure_status') === null) {
            return null;
        }
        return (new TransferFailureStatus())->setDataByReference($this->getByReference('failure_status'));
    }
    /**
     * @param TransferFailureStatus $failureStatus
     * @return $this
     */
    public function setFailureStatus(TransferFailureStatus $failureStatus)
    {
        $this->setByReference('failure_status', $failureStatus->getDataByReference());
        return $this;
    }
    /**
     * @return Money|null
     */
    public function getOutCommission()
    {
        if ($this->get('out_commission') === null) {
            return null;
        }
        return (new Money())->setDataByReference($this->getByReference('out_commission'));
    }
    /**
     * @param Money $outCommission
     * @return $this
     */
    public function setOutCommission(Money $outCommission)
    {
        $this->setByReference('out_commission', $outCommission->getDataByReference());
        return $this;
    }
    /**
     * @return TransferAdditionalData|null
     */
    public function getAdditionalInformation()
    {
        if ($this->get('additional_information') === null) {
            return null;
        }
        return (new TransferAdditionalData())->setDataByReference($this->getByReference('additional_information'));
    }
    /**
     * @param TransferAdditionalData $additionalInformation
     * @return $this
     */
    public function setAdditionalInformation(TransferAdditionalData $additionalInformation)
    {
        $this->setByReference('additional_information', $additionalInformation->getDataByReference());
        return $this;
    }
    /**
     * @return TransferPasswordOutput|null
     */
    public function getPassword()
    {
        if ($this->get('password') === null) {
            return null;
        }
        return (new TransferPasswordOutput())->setDataByReference($this->getByReference('password'));
    }
    /**
     * @param TransferPasswordOutput $password
     * @return $this
     */
    public function setPassword(TransferPasswordOutput $password)
    {
        $this->setByReference('password', $password->getDataByReference());
        return $this;
    }
    /**
     * @return boolean|null
     */
    public function isAllowedToCancel()
    {
        return $this->get('allowed_to_cancel');
    }
    /**
     * @param boolean $allowedToCancel
     * @return $this
     */
    public function setAllowedToCancel($allowedToCancel)
    {
        $this->set('allowed_to_cancel', $allowedToCancel);
        return $this;
    }
}
