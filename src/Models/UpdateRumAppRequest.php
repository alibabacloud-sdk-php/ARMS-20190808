<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateRumAppRequest extends Model
{
    /**
     * @description The application configurations in the JSON format. This parameter is deprecated.
     *
     * @example {"apiRequestOfH5":300,"apiRequestOfOriginal":500,"coldStart":5000,"hotStart":3000,"staticResourceLoad":300,"stutter":1000,"viewLoadOfH5":1000,"viewLoadOfOriginal":2000}
     *
     * @var string
     */
    public $appConfig;

    /**
     * @description Specifies whether to restart the application the next day. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @description The region where the backend application is deployed. This parameter is used in end-to-end tracing scenarios.
     *
     * @example {\\"moduleConfig\\":{\\"enable\\":true,\\"defaultConfig\\":{\\"network\\":{\\"enable\\":true},\\"h5\\":{\\"enable\\":true},\\"routechange\\":{\\"enable\\":true},\\"crash\\":{\\"enable\\":true},\\"view\\":{\\"enable\\":true},\\"coollaunch\\":{\\"enable\\":true},\\"hotlaunch\\":{\\"enable\\":true},\\"action\\":{\\"enable\\":true},\\"lagstuck\\":{\\"enable\\":true},\\"lagfps\\":{\\"enable\\":true},\\"statechange\\":{\\"enable\\":true},\\"anr\\":{\\"enable\\":true},\\"customlog\\":{\\"enable\\":true},\\"customevent\\":{\\"enable\\":true},\\"custommetric\\":{\\"enable\\":true}},\\"versionConfigs\\":{\\"1.1.0\\":{\\"useCustom\\":true,\\"customConfig\\":{\\"network\\":{\\"enable\\":true},\\"h5\\":{\\"enable\\":true},\\"routechange\\":{\\"enable\\":true},\\"crash\\":{\\"enable\\":true},\\"view\\":{\\"enable\\":true},\\"coollaunch\\":{\\"enable\\":true},\\"hotlaunch\\":{\\"enable\\":true},\\"action\\":{\\"enable\\":true},\\"lagstuck\\":{\\"enable\\":false},\\"lagfps\\":{\\"enable\\":false},\\"statechange\\":{\\"enable\\":true},\\"anr\\":{\\"enable\\":true},\\"customlog\\":{\\"enable\\":true},\\"customevent\\":{\\"enable\\":true},\\"custommetric\\":{\\"enable\\":true}}},\\"1.2.0\\":{\\"useCustom\\":false,\\"customConfig\\":{}}}}}
     *
     * @var string
     */
    public $backendServiceTraceRegion;

    /**
     * @description The collection configurations of the mobile SDK. You can enable or disable collection configurations based on the app version.
     *
     * @example {\\"moduleConfig\\":{\\"enable\\":true,\\"defaultConfig\\":{\\"network\\":{\\"enable\\":true},\\"h5\\":{\\"enable\\":true},\\"routechange\\":{\\"enable\\":true},\\"crash\\":{\\"enable\\":true},\\"view\\":{\\"enable\\":true},\\"coollaunch\\":{\\"enable\\":true},\\"hotlaunch\\":{\\"enable\\":true},\\"action\\":{\\"enable\\":true},\\"lagstuck\\":{\\"enable\\":true},\\"lagfps\\":{\\"enable\\":true},\\"statechange\\":{\\"enable\\":true},\\"anr\\":{\\"enable\\":true},\\"customlog\\":{\\"enable\\":true},\\"customevent\\":{\\"enable\\":true},\\"custommetric\\":{\\"enable\\":true}},\\"versionConfigs\\":{\\"1.1.0\\":{\\"useCustom\\":true,\\"customConfig\\":{\\"network\\":{\\"enable\\":true},\\"h5\\":{\\"enable\\":true},\\"routechange\\":{\\"enable\\":true},\\"crash\\":{\\"enable\\":true},\\"view\\":{\\"enable\\":true},\\"coollaunch\\":{\\"enable\\":true},\\"hotlaunch\\":{\\"enable\\":true},\\"action\\":{\\"enable\\":true},\\"lagstuck\\":{\\"enable\\":false},\\"lagfps\\":{\\"enable\\":false},\\"statechange\\":{\\"enable\\":true},\\"anr\\":{\\"enable\\":true},\\"customlog\\":{\\"enable\\":true},\\"customevent\\":{\\"enable\\":true},\\"custommetric\\":{\\"enable\\":true}}},\\"1.2.0\\":{\\"useCustom\\":false,\\"customConfig\\":{}}}}}
     *
     * @var string
     */
    public $bonreeSDKConfigJson;

    /**
     * @description The description of the application.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether you want to subscribe to the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $isSubscribe;

    /**
     * @description The alias of the application.
     *
     * @example Android Test
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example b5xxxxs@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region where the application resides. You can leave this parameter empty or set it to China East 2 Finance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $realRegionId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to restart the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $restart;

    /**
     * @description The service domain name of the application. You can create, modify, and delete service domain name configurations.
     *
     * @example {\\"Op\\":\\"Update\\",\\"Domain\\":\\"example.com\\",\\"Config\\":{\\"Description\\":\\"message\\",\\"Tracing\\":\\"true\\",\\"PropagatorTypes\\":[\\"sw8\\"]}}
     *
     * @var string
     */
    public $serviceDomainOperationJson;

    /**
     * @description Specifies whether to stop the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $stop;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'autoRestart' => 'AutoRestart',
        'backendServiceTraceRegion' => 'BackendServiceTraceRegion',
        'bonreeSDKConfigJson' => 'BonreeSDKConfigJson',
        'description' => 'Description',
        'isSubscribe' => 'IsSubscribe',
        'nickname' => 'Nickname',
        'pid' => 'Pid',
        'realRegionId' => 'RealRegionId',
        'regionId' => 'RegionId',
        'restart' => 'Restart',
        'serviceDomainOperationJson' => 'ServiceDomainOperationJson',
        'stop' => 'Stop',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }
        if (null !== $this->autoRestart) {
            $res['AutoRestart'] = $this->autoRestart;
        }
        if (null !== $this->backendServiceTraceRegion) {
            $res['BackendServiceTraceRegion'] = $this->backendServiceTraceRegion;
        }
        if (null !== $this->bonreeSDKConfigJson) {
            $res['BonreeSDKConfigJson'] = $this->bonreeSDKConfigJson;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isSubscribe) {
            $res['IsSubscribe'] = $this->isSubscribe;
        }
        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->realRegionId) {
            $res['RealRegionId'] = $this->realRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }
        if (null !== $this->serviceDomainOperationJson) {
            $res['ServiceDomainOperationJson'] = $this->serviceDomainOperationJson;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRumAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }
        if (isset($map['AutoRestart'])) {
            $model->autoRestart = $map['AutoRestart'];
        }
        if (isset($map['BackendServiceTraceRegion'])) {
            $model->backendServiceTraceRegion = $map['BackendServiceTraceRegion'];
        }
        if (isset($map['BonreeSDKConfigJson'])) {
            $model->bonreeSDKConfigJson = $map['BonreeSDKConfigJson'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsSubscribe'])) {
            $model->isSubscribe = $map['IsSubscribe'];
        }
        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RealRegionId'])) {
            $model->realRegionId = $map['RealRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }
        if (isset($map['ServiceDomainOperationJson'])) {
            $model->serviceDomainOperationJson = $map['ServiceDomainOperationJson'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }

        return $model;
    }
}
