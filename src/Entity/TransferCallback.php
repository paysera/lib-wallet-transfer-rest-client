<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferCallback extends Entity
{
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return string[]
     */
    public function getStatuses()
    {
        return $this->get('statuses');
    }
    /**
     * @param string[] $statuses
     * @return $this
     */
    public function setStatuses(array $statuses)
    {
        $this->set('statuses', $statuses);
        return $this;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->get('url');
    }
    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->set('url', $url);
        return $this;
    }
}
