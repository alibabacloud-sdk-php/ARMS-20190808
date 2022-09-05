<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody\silencePolicy;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateSilencePolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var silencePolicy
     */
    public $silencePolicy;
    protected $_name = [
        'requestId'     => 'RequestId',
        'silencePolicy' => 'SilencePolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->silencePolicy) {
            $res['SilencePolicy'] = null !== $this->silencePolicy ? $this->silencePolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSilencePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SilencePolicy'])) {
            $model->silencePolicy = silencePolicy::fromMap($map['SilencePolicy']);
        }

        return $model;
    }
}
