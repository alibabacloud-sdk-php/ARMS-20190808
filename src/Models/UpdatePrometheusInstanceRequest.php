<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusInstanceRequest extends Model
{
    /**
     * @description The number of days for automatic archiving after storage expiration (optional values: 60, 90, 180, 365). 0 means not archive.
     *
     * @example 90
     *
     * @var int
     */
    public $archiveDuration;

    /**
     * @description The ID of the Prometheus instance.
     *
     * @example vpc-xxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Storage duration (days).
     *
     * @example 90
     *
     * @var int
     */
    public $storageDuration;
    protected $_name = [
        'archiveDuration' => 'ArchiveDuration',
        'clusterId'       => 'ClusterId',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'storageDuration' => 'StorageDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDuration) {
            $res['ArchiveDuration'] = $this->archiveDuration;
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
        if (null !== $this->storageDuration) {
            $res['StorageDuration'] = $this->storageDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrometheusInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveDuration'])) {
            $model->archiveDuration = $map['ArchiveDuration'];
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
        if (isset($map['StorageDuration'])) {
            $model->storageDuration = $map['StorageDuration'];
        }

        return $model;
    }
}
