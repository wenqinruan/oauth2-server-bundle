<?php

namespace OAuth2ServerBundle\Biz\OauthServer\Service;

interface OauthClientService
{
    public function createClient($oauthClient);
}