<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsRequest extends Model
{
    /**
     * @example 测试触发的告警
     *
     * @var string
     */
    public $alertName;

    /**
     * @example 12345
     *
     * @var int
     */
    public $dispatchRuleId;

    /**
     * @example 2021-12-22 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @example ARMS_APP_MON
     *
     * @var string
     */
    public $integrationType;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @example P6
     *
     * @var string
     */
    public $severity;

    /**
     * @example true
     *
     * @var bool
     */
    public $showActivities;

    /**
     * @example true
     *
     * @var bool
     */
    public $showEvents;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @example 2021-12-10 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $state;
    protected $_name = [
        'alertName'       => 'AlertName',
        'dispatchRuleId'  => 'DispatchRuleId',
        'endTime'         => 'EndTime',
        'integrationType' => 'IntegrationType',
        'page'            => 'Page',
        'regionId'        => 'RegionId',
        'severity'        => 'Severity',
        'showActivities'  => 'ShowActivities',
        'showEvents'      => 'ShowEvents',
        'size'            => 'Size',
        'startTime'       => 'StartTime',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->showActivities) {
            $res['ShowActivities'] = $this->showActivities;
        }
        if (null !== $this->showEvents) {
            $res['ShowEvents'] = $this->showEvents;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['ShowActivities'])) {
            $model->showActivities = $map['ShowActivities'];
        }
        if (isset($map['ShowEvents'])) {
            $model->showEvents = $map['ShowEvents'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
