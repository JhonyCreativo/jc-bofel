<?php


namespace JcBofel\Model\Sale;


use JcBofel\Model\DocumentInterface;

/**
 * Class BaseSale.
 */
class BaseSale implements DocumentInterface
{
    /**
     * @var string
     */
    protected $ublVersion = '2.0';

    /**
     * @var string
     */
    protected $tipoDoc;

    /**
     * @var string
     */
    protected $serie;

    
    public function getUblVersion(): ?string
    {
        return $this->ublVersion;
    }

    /**
     * @param string $ublVersion
     *
     * @return $this
     */
    public function setUblVersion(?string $ublVersion): self
    {
        $this->ublVersion = $ublVersion;

        return $this;
    }

     public function getName(): string
    {
        $parts = [
            "da",
            "da2",
            "da4",
            "da5",
        ];

        return join('-', $parts);
    }
}