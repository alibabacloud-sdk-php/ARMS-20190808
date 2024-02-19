<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\dashboards;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Ailas of the Addon.
     *
     * @example MySQL
     *
     * @var string
     */
    public $alias;

    /**
     * @description Categories list.
     *
     * @var string[]
     */
    public $categories;

    /**
     * @description Dashboard list.
     *
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @description Description of the Addon.
     *
     * @example Monitor database indicators with MySQL Exporter
     *
     * @var string
     */
    public $description;

    /**
     * @description Environment list.
     *
     * @var environments[]
     */
    public $environments;

    /**
     * @description Icon address.
     *
     * @example http://xxxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description Keyword list.
     *
     * @var string[]
     */
    public $keywords;

    /**
     * @description Language.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description Last installation time.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $latestReleaseCreateTime;

    /**
     * @description Name of the Addon.
     *
     * @example mysql
     *
     * @var string
     */
    public $name;

    /**
     * @description Whether to install it only once.
     *
     * @example false
     *
     * @var bool
     */
    public $once;

    /**
     * @description Scene of the Addon.
     *
     * @example database
     *
     * @var string
     */
    public $scene;

    /**
     * @description Version of the Addon.
     *
     * @example 0.0.1
     *
     * @var string
     */
    public $version;

    /**
     * @description Weight of the Addon.
     *
     * @example 857
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'alias'                   => 'Alias',
        'categories'              => 'Categories',
        'dashboards'              => 'Dashboards',
        'description'             => 'Description',
        'environments'            => 'Environments',
        'icon'                    => 'Icon',
        'keywords'                => 'Keywords',
        'language'                => 'Language',
        'latestReleaseCreateTime' => 'LatestReleaseCreateTime',
        'name'                    => 'Name',
        'once'                    => 'Once',
        'scene'                   => 'Scene',
        'version'                 => 'Version',
        'weight'                  => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->dashboards) {
            $res['Dashboards'] = [];
            if (null !== $this->dashboards && \is_array($this->dashboards)) {
                $n = 0;
                foreach ($this->dashboards as $item) {
                    $res['Dashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->environments) {
            $res['Environments'] = [];
            if (null !== $this->environments && \is_array($this->environments)) {
                $n = 0;
                foreach ($this->environments as $item) {
                    $res['Environments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->latestReleaseCreateTime) {
            $res['LatestReleaseCreateTime'] = $this->latestReleaseCreateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->once) {
            $res['Once'] = $this->once;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n                 = 0;
                foreach ($map['Dashboards'] as $item) {
                    $model->dashboards[$n++] = null !== $item ? dashboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Environments'])) {
            if (!empty($map['Environments'])) {
                $model->environments = [];
                $n                   = 0;
                foreach ($map['Environments'] as $item) {
                    $model->environments[$n++] = null !== $item ? environments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LatestReleaseCreateTime'])) {
            $model->latestReleaseCreateTime = $map['LatestReleaseCreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Once'])) {
            $model->once = $map['Once'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
