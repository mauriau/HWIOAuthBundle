<?php

namespace HWI\Bundle\OAuthBundle\OAuth\OptionsModifier;

use HWI\Bundle\OAuthBundle\OAuth\ResourceOwnerInterface;

class OauthOptionsModifier extends AbstractOptionsModifier
{
    public function modifyOptions(array $options, ResourceOwnerInterface $resourceOwner): array
    {
        return $options;
    }
}