<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VerifyPhone
 *
 * @method string getVerifyCode()
 * @method string getSourceIp()
 * @method string getPhone()
 * @method string getLang()
 */
class VerifyPhoneRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2017-08-23',
            'VerifyPhone',
            'green'
        );
    }

    /**
     * @param string $verifyCode
     *
     * @return $this
     */
    public function setVerifyCode($verifyCode)
    {
        $this->requestParameters['VerifyCode'] = $verifyCode;
        $this->queryParameters['VerifyCode'] = $verifyCode;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->requestParameters['Phone'] = $phone;
        $this->queryParameters['Phone'] = $phone;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
