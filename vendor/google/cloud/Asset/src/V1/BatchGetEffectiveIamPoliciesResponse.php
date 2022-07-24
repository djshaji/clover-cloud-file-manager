<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for
 * [AssetService.BatchGetEffectiveIamPolicies][google.cloud.asset.v1.AssetService.BatchGetEffectiveIamPolicies].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse</code>
 */
class BatchGetEffectiveIamPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The effective policies for a batch of resources. Note that the results
     * order is the same as the order of
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names].
     * When a resource does not have any effective IAM policies, its corresponding
     * policy_result will contain empty
     * [EffectiveIamPolicy.policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy policy_results = 2;</code>
     */
    private $policy_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy[]|\Google\Protobuf\Internal\RepeatedField $policy_results
     *           The effective policies for a batch of resources. Note that the results
     *           order is the same as the order of
     *           [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names].
     *           When a resource does not have any effective IAM policies, its corresponding
     *           policy_result will contain empty
     *           [EffectiveIamPolicy.policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The effective policies for a batch of resources. Note that the results
     * order is the same as the order of
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names].
     * When a resource does not have any effective IAM policies, its corresponding
     * policy_result will contain empty
     * [EffectiveIamPolicy.policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy policy_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyResults()
    {
        return $this->policy_results;
    }

    /**
     * The effective policies for a batch of resources. Note that the results
     * order is the same as the order of
     * [BatchGetEffectiveIamPoliciesRequest.names][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesRequest.names].
     * When a resource does not have any effective IAM policies, its corresponding
     * policy_result will contain empty
     * [EffectiveIamPolicy.policies][google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy.policies].
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.BatchGetEffectiveIamPoliciesResponse.EffectiveIamPolicy policy_results = 2;</code>
     * @param \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\BatchGetEffectiveIamPoliciesResponse\EffectiveIamPolicy::class);
        $this->policy_results = $arr;

        return $this;
    }

}

