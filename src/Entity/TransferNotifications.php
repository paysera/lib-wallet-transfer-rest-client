<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferNotifications extends Entity
{
    /**
     * @return TransferNotification|null
     */
    public function getDone()
    {
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
