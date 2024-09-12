<?php
declare(strict_types=1);

namespace PunktDe\Sylius\Api\Resource;

use PunktDe\Sylius\Api\Dto\Channel;

class ChannelResource extends AbstractResource
{
    protected function getPostFields(): array
    {
        return [];
        // TODO: Implement getPostFields() method.
    }

    protected function getPatchFields(): array
    {
        return $this->getPostFields();
    }

    protected function getDtoClass(): string
    {
        return Channel::class;
    }
}
