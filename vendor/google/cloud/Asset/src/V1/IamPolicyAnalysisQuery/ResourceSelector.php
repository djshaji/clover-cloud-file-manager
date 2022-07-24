<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the resource to analyze for access policies, which may be set
 * directly on the resource, or on ancestors such as organizations, folders or
 * projects.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector</code>
 */
class ResourceSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of a resource of [supported resource
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#analyzable_asset_types).
     *
     * Generated from protobuf field <code>string full_resource_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $full_resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $full_resource_name
     *           Required. The [full resource name]
     *           (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     *           of a resource of [supported resource
     *           types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#analyzable_asset_types).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of a resource of [supported resource
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#analyzable_asset_types).
     *
     * Generated from protobuf field <code>string full_resource_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFullResourceName()
    {
        return $this->full_resource_name;
    }

    /**
     * Required. The [full resource name]
     * (https://cloud.google.com/asset-inventory/docs/resource-name-format)
     * of a resource of [supported resource
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types#analyzable_asset_types).
     *
     * Generated from protobuf field <code>string full_resource_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFullResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceSelector::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery_ResourceSelector::class);

