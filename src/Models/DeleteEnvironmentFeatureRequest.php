<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnvironmentFeatureRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description This parameter is required.
     *
     * @example metric-agent
     *
     * @var string
     */
    public $featureName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environmentId' => 'EnvironmentId',
        'featureName'   => 'FeatureName',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnvironmentFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
