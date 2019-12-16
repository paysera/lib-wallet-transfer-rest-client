<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferNotifications extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return TransferNotification|null
     */
    public function getDone()
    {
        if ($this->get('done') === null) {
            return null;
        }
        return (new TransferNotification())->setDataByReference($this->getByReference('done'));
    }
    /**
     * @param TransferNotification $done
     * @return $this
     */
    public function setDone(TransferNotification $done)
    {
        $this->setByReference('done', $done->getDataByReference());
        return $this;
    }
}
