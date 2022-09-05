<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListSilencePoliciesRequest extends Model
{
    /**
     * @var bool
     */
    public $isDetail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'isDetail' => 'IsDetail',
        'name'     => 'Name',
        'page'     => 'Page',
        'regionId' => 'RegionId',
        'size'     => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDetail) {
            $res['IsDetail'] = $this->isDetail;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSilencePoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDetail'])) {
            $model->isDetail = $map['IsDetail'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
