<?php

namespace Analogic\CryptocurrencyBundle\Dashd;

use Analogic\CryptocurrencyBundle\Bitcoind\BitcoindListenerBase;
use Analogic\CryptocurrencyBundle\Currency;
use Analogic\CryptocurrencyBundle\Event\BlockEvent;
use Analogic\CryptocurrencyBundle\Event\TransactionEvent;

final class DashdListener extends BitcoindListenerBase
{
    protected function newTransactionEvent($data)
    {
        return new TransactionEvent($this->transactionFactory->createFromString($data), Currency::DASH, $data);
    }

    protected function newBlockEvent($data)
    {
        return new BlockEvent(Currency::DASH, $data);
    }
}