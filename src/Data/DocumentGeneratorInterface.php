<?php


namespace JcBofel\Data;

use JcBofel\Model\DocumentInterface;

interface DocumentGeneratorInterface
{
    /**
     * @return DocumentInterface
     */
    public function create(): ?DocumentInterface;
}