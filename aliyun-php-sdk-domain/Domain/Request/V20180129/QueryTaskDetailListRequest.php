<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryTaskDetailList
 *
 * @method string getTaskStatus()
 * @method string getInstanceId()
 * @method string getTaskNo()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getPageSize()
 * @method string getLang()
 * @method string getPageNum()
 */
class QueryTaskDetailListRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'QueryTaskDetailList'
        );
    }

    /**
     * @param string $taskStatus
     *
     * @return $this
     */
    public function setTaskStatus($taskStatus)
    {
        $this->requestParameters['TaskStatus'] = $taskStatus;
        $this->queryParameters['TaskStatus'] = $taskStatus;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $taskNo
     *
     * @return $this
     */
    public function setTaskNo($taskNo)
    {
        $this->requestParameters['TaskNo'] = $taskNo;
        $this->queryParameters['TaskNo'] = $taskNo;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

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

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }
}
