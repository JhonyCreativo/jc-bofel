<?php

namespace Jhonycreativo\JcBofel;


/**
 * Invoice 2.1.
 *
 * Class Invoice.
 */
// class Invoice extends BaseSale
class Invoice 
{
    /**
     * Tipo operacion (Catálogo 51).
     *
     * @var string
     */
    private $tipoOperacion;

   
    /**
     * @return string
     */
    public function getTipoOperacion(): ?string
    {
        return $this->tipoOperacion;
    }

    /**
     * @param string $tipoOperacion
     *
     * @return Invoice
     */
    public function setTipoOperacion(?string $tipoOperacion): Invoice
    {
        $this->tipoOperacion = $tipoOperacion;

        return $this;
    }

}