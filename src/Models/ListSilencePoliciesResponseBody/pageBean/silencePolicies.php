<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies\matchingRules;
use AlibabaCloud\Tea\Model;

class silencePolicies extends Model
{
    /**
     * @description The effective type. Valid values: PERMANENT: The policy is effective permanently. CYCLE_EFFECT: The policy is effective cyclically. CUSTOM_TIME: The policy is effective during a custom time period.
     *
     * @example PERMANENT
     *
     * @var string
     */
    public $effectiveTimeType;

    /**
     * @description The ID of the silence policy.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The matching rules.
     *
     * @var matchingRules[]
     */
    public $matchingRules;

    /**
     * @description The name of the silence policy.
     *
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the silence policy is enabled. Valid values: enable and disable.
     *
     * @example enable
     *
     * @var string
     */
    public $state;

    /**
     * @description The effective time. Valid values: WEEK: weekly DAY: daily
     *
     * @example WEEK
     *
     * @var string
     */
    public $timePeriod;

    /**
     * @description Effective period.
     *
     * @example [{"endTime":"00:00","endWeek":"7","startTime":"00:00","startWeek":"1"}]
     *
     * @var string
     */
    public $timeSlots;
    protected $_name = [
        'effectiveTimeType' => 'EffectiveTimeType',
        'id' => 'Id',
        'matchingRules' => 'MatchingRules',
        'name' => 'Name',
        'state' => 'State',
        'timePeriod' => 'TimePeriod',
        'timeSlots' => 'TimeSlots',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTimeType) {
            $res['EffectiveTimeType'] = $this->effectiveTimeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = [];
            if (null !== $this->matchingRules && \is_array($this->matchingRules)) {
                $n = 0;
                foreach ($this->matchingRules as $item) {
                    $res['MatchingRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->timePeriod) {
            $res['TimePeriod'] = $this->timePeriod;
        }
        if (null !== $this->timeSlots) {
            $res['TimeSlots'] = $this->timeSlots;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return silencePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTimeType'])) {
            $model->effectiveTimeType = $map['EffectiveTimeType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchingRules'])) {
            if (!empty($map['MatchingRules'])) {
                $model->matchingRules = [];
                $n = 0;
                foreach ($map['MatchingRules'] as $item) {
                    $model->matchingRules[$n++] = null !== $item ? matchingRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TimePeriod'])) {
            $model->timePeriod = $map['TimePeriod'];
        }
        if (isset($map['TimeSlots'])) {
            $model->timeSlots = $map['TimeSlots'];
        }

        return $model;
    }
}
