<?php

declare(strict_types=1);

namespace AppBundle\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface ProductInterface extends ResourceInterface, TimestampableInterface
{
    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void;

    /**
     * @return float
     */
    public function getPriceWithoutVAT(): float;

    /**
     * @param float|null $priceWithoutVAT
     */
    public function setPriceWithoutVAT(?float $priceWithoutVAT): void;
}
