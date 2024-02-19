<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @description Name of the Feature.
     *
     * @var bool[]
     */
    public $features;

    /**
     * @description Service list.
     *
     * @var string[]
     */
    public $services;
    protected $_name = [
        'features' => 'Features',
        'services' => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->services) {
            $res['Services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = $map['Services'];
            }
        }

        return $model;
    }
}
