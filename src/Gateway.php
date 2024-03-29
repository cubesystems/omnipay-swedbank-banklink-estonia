<?php

namespace Omnipay\SwedbankBanklinkEstonia;

use Omnipay\Common\AbstractGateway;
use Omnipay\SwedbankBanklinkEstonia\Messages\PurchaseRequest;
use Omnipay\SwedbankBanklinkEstonia\Messages\CompleteRequest;

/**
 * Class Gateway
 *
 * @package Omnipay\SwedbankBanklinkEstonia
 */
class Gateway extends AbstractGateway
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Swedbank Banlink';
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'gatewayUrl'           => 'https://www.swedbank.ee/banklink/',
            'merchantId'            => '', //VK_SND_ID
            'returnUrl'             => '',
            'privateCertificatePath' => '',
            'publicCertificatePath' => '',
            'privateCertificatePassphrase' => null,

            //Global parameters for requests will be set via gateway
            'language'              => 'EST',
            'version'               => '008',
            'signatureAlgorithm'    => OPENSSL_ALGO_SHA1,
        );
    }


    /**
     * @param array $options
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $options = [])
    {
        return $this->createRequest(PurchaseRequest::class, $options);
    }

    /**
     * Complete transaction
     * @param array $options
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function completePurchase(array $options = [])
    {
        return $this->createRequest(CompleteRequest::class, $options);
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setGatewayUrl($value)
    {
        return $this->setParameter('gatewayUrl', $value);
    }

    /**
     * @return string
     */
    public function getGatewayUrl()
    {
        return $this->getParameter('gatewayUrl');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setReturnUrl($value)
    {
        return $this->setParameter('returnUrl', $value);
    }

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->getParameter('returnUrl');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPrivateCertificatePath($value)
    {
        return $this->setParameter('privateCertificatePath', $value);
    }

    /**
     * @return string
     */
    public function getPrivateCertificatePath()
    {
        return $this->getParameter('privateCertificatePath');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPrivateCertificatePassphrase($value)
    {
        return $this->setParameter('privateCertificatePassphrase', $value);
    }

    /**
     * @return string
     */
    public function getPrivateCertificatePassphrase()
    {
        return $this->getParameter('privateCertificatePassphrase');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPublicCertificatePath($value)
    {
        return $this->setParameter('publicCertificatePath', $value);
    }

    /**
     * @return string
     */
    public function getPublicCertificatePath()
    {
        return $this->getParameter('publicCertificatePath');
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->getParameter('language');
    }

    /**
     * @param $value
     */
    public function setLanguage($value)
    {
        return $this->setParameter('language', $value);
    }

    /**
     * @return int
     */
    public function getSignatureAlgorithm()
    {
        return $this->getParameter('signatureAlgorithm');
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setSignatureAlgorithm($value)
    {
        return $this->setParameter('signatureAlgorithm', $value);
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->getParameter('version');
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setVersion($value)
    {
        return $this->setParameter('version', $value);
    }
}
