<?php

namespace Krilo89\JsonApiRqlFinderBundle;

use Krilo89\JsonApiRqlFinderBundle\DependencyInjection\JsonApiRqlFinderExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class Krilo89JsonApiRqlFilterBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new JsonApiRqlFinderExtension();
    }
}
