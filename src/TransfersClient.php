<?php

namespace Paysera\Client\TransfersClient;

use Paysera\Client\TransfersClient\Entity as Entities;
use Fig\Http\Message\RequestMethodInterface;
use Paysera\Component\RestClientCommon\Client\ApiClient;

class TransfersClient
{
    private $apiClient;

    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function withOptions(array $options)
    {
        return new TransfersClient($this->apiClient->withOptions($options));
    }

    /**
     * It reserves funds for transfer and makes it "reserved". It's enough for transfer to be processed. If there are not enough funds, any limits are reached etc., transfer will be still "new" and no action will take place. Returns error if no funds available.
     * PUT /transfers/{id}/reserve
     *
     * @param string $id
     * @param Entities\TransferRegistrationParameters $transferRegistrationParameters
     * @return Entities\TransferOutput
     */
    public function reserveTransfer($id, Entities\TransferRegistrationParameters $transferRegistrationParameters)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('transfers/%s/reserve', urlencode($id)),
            $transferRegistrationParameters
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Provide password for transfer with status `waiting_password`. If operation is successful, transfer status becomes `done`. Available only for internal transfers. Returns error if password provided is invalid.
     * PUT /transfers/{id}/provide-password
     *
     * @param string $id
     * @param Entities\TransferPassword $transferPassword
     * @return Entities\TransferOutput
     */
    public function provideTransferPassword($id, Entities\TransferPassword $transferPassword)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('transfers/%s/provide-password', urlencode($id)),
            $transferPassword
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Make transfer visible in frontend for signing. If currency convert operations are related to transfer, they are done when transfer becomes `reserved`. If there are expectations in currency convert requests, transfer becomes `failed` together with related conversion request(s) if those expectations fails. This only makes transfer "reserved", so it's visible in our Web UI for signing
     * PUT /transfers/{id}/register
     *
     * @param string $id
     * @param Entities\TransferRegistrationParameters $transferRegistrationParameters
     * @return Entities\TransferOutput
     */
    public function registerTransfer($id, Entities\TransferRegistrationParameters $transferRegistrationParameters)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('transfers/%s/register', urlencode($id)),
            $transferRegistrationParameters
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Signs the transfer
     * PUT /transfers/{id}/sign
     *
     * @param string $id
     * @param Entities\TransferRegistrationParameters $transferRegistrationParameters
     * @return Entities\TransferOutput
     */
    public function signTransfer($id, Entities\TransferRegistrationParameters $transferRegistrationParameters)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_PUT,
            sprintf('transfers/%s/sign', urlencode($id)),
            $transferRegistrationParameters
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Get transfer.
     * GET /transfers/{id}
     *
     * @param string $id
     * @return Entities\TransferOutput
     */
    public function getTransfer($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            sprintf('transfers/%s', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Revoke transfer.
     * DELETE /transfers/{id}
     *
     * @param string $id
     * @return Entities\TransferOutput
     */
    public function deleteTransfer($id)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_DELETE,
            sprintf('transfers/%s', urlencode($id)),
            null
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Create transfer in the system. Created transfer is invisible and will be deleted if no more actions are performed.

     * POST /transfers
     *
     * @param Entities\TransferInput $transferInput
     * @return Entities\TransferOutput
     */
    public function createTransfer(Entities\TransferInput $transferInput)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_POST,
            'transfers',
            $transferInput
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\TransferOutput($data);
    }

    /**
     * Standard SQL-style Result filtering
     * GET /transfers
     *
     * @param Entities\TransfersFilter $transfersFilter
     * @return Entities\FilteredTransfersResult
     */
    public function getTransfers(Entities\TransfersFilter $transfersFilter)
    {
        $request = $this->apiClient->createRequest(
            RequestMethodInterface::METHOD_GET,
            'transfers',
            $transfersFilter
        );
        $data = $this->apiClient->makeRequest($request);

        return new Entities\FilteredTransfersResult($data, 'transfers');
    }
}
