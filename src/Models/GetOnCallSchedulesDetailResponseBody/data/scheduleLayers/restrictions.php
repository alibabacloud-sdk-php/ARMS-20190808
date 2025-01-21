<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetOnCallSchedulesDetailResponseBody\data\scheduleLayers;

use AlibabaCloud\Dara\Model;

class restrictions extends Model
{
    /**
     * @var string
     */
    public $endTimeOfDay;
    /**
     * @var string
     */
    public $restrictionType;
    /**
     * @var string
     */
    public $startTimeOfDay;
    protected $_name = [
        'endTimeOfDay'    => 'EndTimeOfDay',
        'restrictionType' => 'RestrictionType',
        'startTimeOfDay'  => 'StartTimeOfDay',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeOfDay) {
            $res['EndTimeOfDay'] = $this->endTimeOfDay;
        }

        if (null !== $this->restrictionType) {
            $res['RestrictionType'] = $this->restrictionType;
        }

        if (null !== $this->startTimeOfDay) {
            $res['StartTimeOfDay'] = $this->startTimeOfDay;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeOfDay'])) {
            $model->endTimeOfDay = $map['EndTimeOfDay'];
        }

        if (isset($map['RestrictionType'])) {
            $model->restrictionType = $map['RestrictionType'];
        }

        if (isset($map['StartTimeOfDay'])) {
            $model->startTimeOfDay = $map['StartTimeOfDay'];
        }

        return $model;
    }
}
