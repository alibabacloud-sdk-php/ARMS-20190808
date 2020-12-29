<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\groupRules;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;
use AlibabaCloud\Tea\Model;

class dispatchRule extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var labelMatchExpressionGrid
     */
    public $labelMatchExpressionGrid;

    /**
     * @var string
     */
    public $name;

    /**
     * @var groupRules[]
     */
    public $groupRules;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var notifyRules[]
     */
    public $notifyRules;
    protected $_name = [
        'state'                    => 'State',
        'labelMatchExpressionGrid' => 'LabelMatchExpressionGrid',
        'name'                     => 'Name',
        'groupRules'               => 'GroupRules',
        'ruleId'                   => 'RuleId',
        'notifyRules'              => 'NotifyRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->labelMatchExpressionGrid) {
            $res['LabelMatchExpressionGrid'] = null !== $this->labelMatchExpressionGrid ? $this->labelMatchExpressionGrid->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->groupRules) {
            $res['GroupRules'] = [];
            if (null !== $this->groupRules && \is_array($this->groupRules)) {
                $n = 0;
                foreach ($this->groupRules as $item) {
                    $res['GroupRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->notifyRules) {
            $res['NotifyRules'] = [];
            if (null !== $this->notifyRules && \is_array($this->notifyRules)) {
                $n = 0;
                foreach ($this->notifyRules as $item) {
                    $res['NotifyRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dispatchRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['LabelMatchExpressionGrid'])) {
            $model->labelMatchExpressionGrid = labelMatchExpressionGrid::fromMap($map['LabelMatchExpressionGrid']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GroupRules'])) {
            if (!empty($map['GroupRules'])) {
                $model->groupRules = [];
                $n                 = 0;
                foreach ($map['GroupRules'] as $item) {
                    $model->groupRules[$n++] = null !== $item ? groupRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['NotifyRules'])) {
            if (!empty($map['NotifyRules'])) {
                $model->notifyRules = [];
                $n                  = 0;
                foreach ($map['NotifyRules'] as $item) {
                    $model->notifyRules[$n++] = null !== $item ? notifyRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
