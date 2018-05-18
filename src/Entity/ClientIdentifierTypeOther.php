<?php

namespace Paysera\Client\TransfersClient\Entity;

use Paysera\Component\RestClientCommon\Entity\Entity;

class ClientIdentifierTypeOther extends Entity
{
    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->get('document_type');
    }
    /**
     * @param string $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->set('document_type', $documentType);
        return $this;
    }
    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->get('document_number');
    }
    /**
     * @param string $documentNumber
     * @return $this
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->set('document_number', $documentNumber);
        return $this;
    }
}
