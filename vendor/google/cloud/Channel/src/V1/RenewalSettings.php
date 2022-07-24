<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Renewal settings for renewable Offers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.RenewalSettings</code>
 */
class RenewalSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * If false, the plan will be completed at the end date.
     *
     * Generated from protobuf field <code>bool enable_renewal = 1;</code>
     */
    private $enable_renewal = false;
    /**
     * If true and enable_renewal = true, the unit (for example seats or licenses)
     * will be set to the number of active units at renewal time.
     *
     * Generated from protobuf field <code>bool resize_unit_count = 2;</code>
     */
    private $resize_unit_count = false;
    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 5;</code>
     */
    private $payment_plan = 0;
    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 6;</code>
     */
    private $payment_cycle = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_renewal
     *           If false, the plan will be completed at the end date.
     *     @type bool $resize_unit_count
     *           If true and enable_renewal = true, the unit (for example seats or licenses)
     *           will be set to the number of active units at renewal time.
     *     @type int $payment_plan
     *           Describes how a reseller will be billed.
     *     @type \Google\Cloud\Channel\V1\Period $payment_cycle
     *           Describes how frequently the reseller will be billed, such as
     *           once per month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * If false, the plan will be completed at the end date.
     *
     * Generated from protobuf field <code>bool enable_renewal = 1;</code>
     * @return bool
     */
    public function getEnableRenewal()
    {
        return $this->enable_renewal;
    }

    /**
     * If false, the plan will be completed at the end date.
     *
     * Generated from protobuf field <code>bool enable_renewal = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableRenewal($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_renewal = $var;

        return $this;
    }

    /**
     * If true and enable_renewal = true, the unit (for example seats or licenses)
     * will be set to the number of active units at renewal time.
     *
     * Generated from protobuf field <code>bool resize_unit_count = 2;</code>
     * @return bool
     */
    public function getResizeUnitCount()
    {
        return $this->resize_unit_count;
    }

    /**
     * If true and enable_renewal = true, the unit (for example seats or licenses)
     * will be set to the number of active units at renewal time.
     *
     * Generated from protobuf field <code>bool resize_unit_count = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setResizeUnitCount($var)
    {
        GPBUtil::checkBool($var);
        $this->resize_unit_count = $var;

        return $this;
    }

    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 5;</code>
     * @return int
     */
    public function getPaymentPlan()
    {
        return $this->payment_plan;
    }

    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPaymentPlan($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\PaymentPlan::class);
        $this->payment_plan = $var;

        return $this;
    }

    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 6;</code>
     * @return \Google\Cloud\Channel\V1\Period|null
     */
    public function getPaymentCycle()
    {
        return $this->payment_cycle;
    }

    public function hasPaymentCycle()
    {
        return isset($this->payment_cycle);
    }

    public function clearPaymentCycle()
    {
        unset($this->payment_cycle);
    }

    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 6;</code>
     * @param \Google\Cloud\Channel\V1\Period $var
     * @return $this
     */
    public function setPaymentCycle($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Period::class);
        $this->payment_cycle = $var;

        return $this;
    }

}

