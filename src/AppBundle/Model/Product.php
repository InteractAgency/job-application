<?php

declare(strict_types=1);

namespace AppBundle\Model;

use Sylius\Component\Resource\Model\TimestampableTrait;

class Product implements ProductInterface
{
    use TimestampableTrait;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var float|null
     */
    protected $priceWithoutVAT;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceWithoutVAT(): float
    {
        return (float) $this->priceWithoutVAT;
    }

    /**
     * {@inheritdoc}
     */
    public function setPriceWithoutVAT(?float $priceWithoutVAT): void
    {
        $this->priceWithoutVAT = $priceWithoutVAT;
    }
}
