<?php

namespace OAuth2ServerBundle\Biz\OauthServer\Service\Impl;

use Codeages\Biz\Framework\Service\BaseService;
use OAuth2ServerBundle\Biz\OauthServer\Service\OauthClientService;
use OAuth2\Storage\ClientCredentialsInterface;

class OauthClientServiceImpl extends BaseService implements OauthClientService,ClientCredentialsInterface
{
    public function checkClientCredentials($client_id, $client_secret = null)
    {
        // TODO: Implement checkClientCredentials() method.
    }

    public function isPublicClient($client_id)
    {
        // TODO: Implement isPublicClient() method.
    }

    public function getClientDetails($client_id)
    {
        // TODO: Implement getClientDetails() method.
    }

    public function getClientScope($client_id)
    {
        // TODO: Implement getClientScope() method.
    }

    public function checkRestrictedGrantType($client_id, $grant_type)
    {
        // TODO: Implement checkRestrictedGrantType() method.
    }

    public function getClient($clientId)
    {
        // TODO: Implement getClient() method.
    }

    public function createClient($oauthClient)
    {
        // TODO: Implement createClient() method.
    }

    private function getOauthClientDao()
    {
        return $this->biz->dao('Oauth2ServerBundle');
    }
}