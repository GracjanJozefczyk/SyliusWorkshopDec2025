<?php

declare(strict_types=1);

namespace App\Factory;

use App\Entity\Brand\BrandInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

final class BrandFactory implements FactoryInterface
{
    public function __construct(
        private FactoryInterface $decoratedFactory,
    ) {
    }

    public function createNew(): BrandInterface
    {
        /** @var BrandInterface $brand */
        $brand = $this->decoratedFactory->createNew();

        return $brand;
    }

    public function createWithCode(): BrandInterface
    {
        $brand = $this->createNew();

        $code = 'BRAND-' . strtoupper(bin2hex(random_bytes(4)));
        $brand->setCode($code);

        return $brand;
    }
}
