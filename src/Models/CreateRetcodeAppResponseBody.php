<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean;
use AlibabaCloud\Tea\Model;

class CreateRetcodeAppResponseBody extends Model
{
    /**
     * @example A5EC8221-08F2-4C95-9AF1-49FD998C647A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var retcodeAppDataBean
     */
    public $retcodeAppDataBean;
    protected $_name = [
        'requestId'          => 'RequestId',
        'retcodeAppDataBean' => 'RetcodeAppDataBean',
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
        if (null !== $this->retcodeAppDataBean) {
            $res['RetcodeAppDataBean'] = null !== $this->retcodeAppDataBean ? $this->retcodeAppDataBean->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetcodeAppDataBean'])) {
            $model->retcodeAppDataBean = retcodeAppDataBean::fromMap($map['RetcodeAppDataBean']);
        }

        return $model;
    }
}
