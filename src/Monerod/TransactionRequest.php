<?php

namespace Analogic\CryptocurrencyBundle\Monerod;

class TransactionRequest extends \Analogic\CryptocurrencyBundle\Transaction\TransactionRequest
{
    protected $paymentId;

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function setPaymentId(?string $paymentId)
    {
        $this->paymentId = $paymentId;
    }


}