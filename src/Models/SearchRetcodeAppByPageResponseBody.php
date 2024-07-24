<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody\pageBean;
use AlibabaCloud\Tea\Model;

class SearchRetcodeAppByPageResponseBody extends Model
{
    /**
     * @description The returned page information.
     *
     * @var pageBean
     */
    public $pageBean;

    /**
     * @description The request ID.
     *
     * @example 626037F5-FDEB-45B0-804C-B3C92797A64E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageBean'  => 'PageBean',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageBean) {
            $res['PageBean'] = null !== $this->pageBean ? $this->pageBean->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchRetcodeAppByPageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageBean'])) {
            $model->pageBean = pageBean::fromMap($map['PageBean']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
