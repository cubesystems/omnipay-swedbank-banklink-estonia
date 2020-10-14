<?php

namespace Omnipay\SwedbankBanklinkEstonia\Messages;

use Omnipay\Common\Message\AbstractResponse as CommonAbstractResponse;

abstract class AbstractResponse extends CommonAbstractResponse
{
    public function getTransactionReference()
    {
        return $this->data['VK_REF'] ?? $this->data['VK_REF'];
    }
}
