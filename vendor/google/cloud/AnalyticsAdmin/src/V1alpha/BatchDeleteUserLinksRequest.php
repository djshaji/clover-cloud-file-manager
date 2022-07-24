<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BatchDeleteUserLinks RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.BatchDeleteUserLinksRequest</code>
 */
class BatchDeleteUserLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all values for user link names to delete must match this
     * field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The requests specifying the user links to update.
     * A maximum of 1000 user links can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DeleteUserLinkRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account or property that all user links in the request are
     *           for. The parent of all values for user link names to delete must match this
     *           field.
     *           Example format: accounts/1234
     *     @type \Google\Analytics\Admin\V1alpha\DeleteUserLinkRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. The requests specifying the user links to update.
     *           A maximum of 1000 user links can be updated in a batch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all values for user link names to delete must match this
     * field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account or property that all user links in the request are
     * for. The parent of all values for user link names to delete must match this
     * field.
     * Example format: accounts/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The requests specifying the user links to update.
     * A maximum of 1000 user links can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DeleteUserLinkRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. The requests specifying the user links to update.
     * A maximum of 1000 user links can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.DeleteUserLinkRequest requests = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\DeleteUserLinkRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1alpha\DeleteUserLinkRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

