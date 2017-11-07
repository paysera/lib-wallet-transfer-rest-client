<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class TransferRegistrationParameters extends Entity
{
    /**
     * @return ConvertCurrency[]
     */
    public function getConvertCurrency()
    {
        $items = $this->getByReference('convert_currency');
        if ($items === null) {
            return [];
        }

        $list = [];
        foreach($items as &$item) {
            $list[] = (new ConvertCurrency())->setDataByReference($item);
        }

        return $list;
    }
    /**
     * @param ConvertCurrency[] $convertCurrency
     * @return $this
     */
    public function setConvertCurrency(array $convertCurrency)
    {
        $data = [];
        foreach($convertCurrency as $item) {
            $data[] = $item->getDataByReference();
        }
        $this->setByReference('convert_currency', $data);
        return $this;
    }
    /**
     * @return string|null
     */
    public function getUserIp()
    {
        return $this->get('user_ip');
    }
    /**
     * @param string $userIp
     * @return $this
     */
    public function setUserIp($userIp)
    {
        $this->set('user_ip', $userIp);
        return $this;
    }
}
