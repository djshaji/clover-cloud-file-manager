<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.ListMetadataSchemas][google.cloud.aiplatform.v1.MetadataService.ListMetadataSchemas].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListMetadataSchemasRequest</code>
 */
class ListMetadataSchemasRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The MetadataStore whose MetadataSchemas should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of MetadataSchemas to return. The service may return
     * fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous
     * [MetadataService.ListMetadataSchemas][google.cloud.aiplatform.v1.MetadataService.ListMetadataSchemas] call. Provide this to retrieve the
     * next page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * A query to filter available MetadataSchemas for matching results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The MetadataStore whose MetadataSchemas should be listed.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *     @type int $page_size
     *           The maximum number of MetadataSchemas to return. The service may return
     *           fewer.
     *           Must be in range 1-1000, inclusive. Defaults to 100.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [MetadataService.ListMetadataSchemas][google.cloud.aiplatform.v1.MetadataService.ListMetadataSchemas] call. Provide this to retrieve the
     *           next page.
     *           When paginating, all other provided parameters must match the call that
     *           provided the page token. (Otherwise the request will fail with
     *           INVALID_ARGUMENT error.)
     *     @type string $filter
     *           A query to filter available MetadataSchemas for matching results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The MetadataStore whose MetadataSchemas should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The MetadataStore whose MetadataSchemas should be listed.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
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
     * The maximum number of MetadataSchemas to return. The service may return
     * fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of MetadataSchemas to return. The service may return
     * fewer.
     * Must be in range 1-1000, inclusive. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [MetadataService.ListMetadataSchemas][google.cloud.aiplatform.v1.MetadataService.ListMetadataSchemas] call. Provide this to retrieve the
     * next page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [MetadataService.ListMetadataSchemas][google.cloud.aiplatform.v1.MetadataService.ListMetadataSchemas] call. Provide this to retrieve the
     * next page.
     * When paginating, all other provided parameters must match the call that
     * provided the page token. (Otherwise the request will fail with
     * INVALID_ARGUMENT error.)
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * A query to filter available MetadataSchemas for matching results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A query to filter available MetadataSchemas for matching results.
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

