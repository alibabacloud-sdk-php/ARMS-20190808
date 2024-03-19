<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\apiHTTP\requestBody;
use AlibabaCloud\Tea\Model;

class apiHTTP extends Model
{
    /**
     * @var bool
     */
    public $checkCert;

    /**
     * @example 5000
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @var int
     */
    public $protocolAlpnProtocol;

    /**
     * @var requestBody
     */
    public $requestBody;

    /**
     * @var string[]
     */
    public $requestHeaders;

    /**
     * @example http://www.demo.com/api/list
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 10000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'checkCert'            => 'CheckCert',
        'connectTimeout'       => 'ConnectTimeout',
        'method'               => 'Method',
        'protocolAlpnProtocol' => 'ProtocolAlpnProtocol',
        'requestBody'          => 'RequestBody',
        'requestHeaders'       => 'RequestHeaders',
        'targetUrl'            => 'TargetUrl',
        'timeout'              => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkCert) {
            $res['CheckCert'] = $this->checkCert;
        }
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->protocolAlpnProtocol) {
            $res['ProtocolAlpnProtocol'] = $this->protocolAlpnProtocol;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toMap() : null;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiHTTP
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckCert'])) {
            $model->checkCert = $map['CheckCert'];
        }
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['ProtocolAlpnProtocol'])) {
            $model->protocolAlpnProtocol = $map['ProtocolAlpnProtocol'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = requestBody::fromMap($map['RequestBody']);
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = $map['RequestHeaders'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
