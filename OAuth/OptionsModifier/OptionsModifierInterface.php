<?php

namespace HWI\Bundle\OAuthBundle\OAuth\OptionsModifier;

use HWI\Bundle\OAuthBundle\OAuth\ResourceOwnerInterface;

interface OptionsModifierInterface
{
    public function modifyOptions(array $options, ResourceOwnerInterface $resourceOwner): array ;
}