<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $httpParams;

    /**
     * @var string
     */
    public $httpHeaders;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'contactName' => 'ContactName',
        'method'      => 'Method',
        'url'         => 'Url',
        'httpParams'  => 'HttpParams',
        'httpHeaders' => 'HttpHeaders',
        'regionId'    => 'RegionId',
        'proxyUserId' => 'ProxyUserId',
        'contactId'   => 'ContactId',
        'body'        => 'Body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->httpParams) {
            $res['HttpParams'] = $this->httpParams;
        }
        if (null !== $this->httpHeaders) {
            $res['HttpHeaders'] = $this->httpHeaders;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['HttpParams'])) {
            $model->httpParams = $map['HttpParams'];
        }
        if (isset($map['HttpHeaders'])) {
            $model->httpHeaders = $map['HttpHeaders'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        return $model;
    }
}
