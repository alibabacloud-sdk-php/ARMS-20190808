<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class OpenArmsDefaultSLRResponseBody extends Model
{
    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   `true`: The call was successful.
     *   `false`: The call failed.
     *
     * @example true
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 53CACA70-2CF7-490C-BD06-1A2AE4EB****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenArmsDefaultSLRResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
