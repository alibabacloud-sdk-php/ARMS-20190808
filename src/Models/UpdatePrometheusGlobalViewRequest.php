<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusGlobalViewRequest extends Model
{
    /**
     * @description 创建GlobalView时，是否要求所有子实例都校验成功时，才创建GlobalView实例。默认是false，即可以部分成功。
     *
     * @example true
     *
     * @var bool
     */
    public $allSubClustersSuccess;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example global****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The region ID.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the Prometheus instance belongs.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The data sources of the global aggregation instance.
     *
     * @example \[ { "headers":{ }, "regionId":"cn-hangzhou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c39a1048921e04f\*\*\*\*\*\*\*\*\*\*\*", "sourceName":"arms-luyao-test", "dataSource":"", "userId":"1672753\*\*\*\*\*\*\*\*\*\*\*" }, { "headers":{ }, "regionId":"cn-beijing", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c6b6485496d5b40\*\*\*\*\*\*\*\*\*\*\*", "sourceName":"agent-321-test", "dataSource":"", "userId":"1672753\*\*\*\*\*\*\*\*\*\*\*" }, { "headers":{ }, "regionId":"cn-zhangjiakou", "sourceType":"AlibabaPrometheus", "extras":{ }, "clusterId":"c261a4f3200c446\*\*\*\*\*\*\*\*\*\*\*", "sourceName":"zaifeng-cardinality-01", "dataSource":"", "userId":"1672753\*\*\*\*\*\*\*\*\*\*\*" } ]
     *
     * @var string
     */
    public $subClustersJson;
    protected $_name = [
        'allSubClustersSuccess' => 'AllSubClustersSuccess',
        'clusterId'             => 'ClusterId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'subClustersJson'       => 'SubClustersJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allSubClustersSuccess) {
            $res['AllSubClustersSuccess'] = $this->allSubClustersSuccess;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->subClustersJson) {
            $res['SubClustersJson'] = $this->subClustersJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllSubClustersSuccess'])) {
            $model->allSubClustersSuccess = $map['AllSubClustersSuccess'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SubClustersJson'])) {
            $model->subClustersJson = $map['SubClustersJson'];
        }

        return $model;
    }
}
