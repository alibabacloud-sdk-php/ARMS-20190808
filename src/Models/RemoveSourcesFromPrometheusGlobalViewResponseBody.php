<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\RemoveSourcesFromPrometheusGlobalViewResponseBody\data;
use AlibabaCloud\Tea\Model;

class RemoveSourcesFromPrometheusGlobalViewResponseBody extends Model
{
    /**
     * @description Status code. 200 is success, other status codes are exceptions.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned struct.
     *
     * @var data
     */
    public $data;

    /**
     * @description Returns a hint message for the result.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example 9319A57D-2D9E-472A-B69B-CF3CD16D****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSourcesFromPrometheusGlobalViewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
