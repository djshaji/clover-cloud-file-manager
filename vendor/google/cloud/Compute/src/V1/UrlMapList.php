<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains a list of UrlMap resources.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UrlMapList</code>
 */
class UrlMapList extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     */
    private $id = null;
    /**
     * A list of UrlMap resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMap items = 100526016;</code>
     */
    private $items;
    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     */
    private $next_page_token = null;
    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     */
    private $warning = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           [Output Only] Unique identifier for the resource; defined by the server.
     *     @type \Google\Cloud\Compute\V1\UrlMap[]|\Google\Protobuf\Internal\RepeatedField $items
     *           A list of UrlMap resources.
     *     @type string $kind
     *           Type of resource.
     *     @type string $next_page_token
     *           [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for this resource.
     *     @type \Google\Cloud\Compute\V1\Warning $warning
     *           [Output Only] Informational warning message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] Unique identifier for the resource; defined by the server.
     *
     * Generated from protobuf field <code>optional string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * A list of UrlMap resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMap items = 100526016;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * A list of UrlMap resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMap items = 100526016;</code>
     * @param \Google\Cloud\Compute\V1\UrlMap[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\UrlMap::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * Type of resource.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return isset($this->next_page_token) ? $this->next_page_token : '';
    }

    public function hasNextPageToken()
    {
        return isset($this->next_page_token);
    }

    public function clearNextPageToken()
    {
        unset($this->next_page_token);
    }

    /**
     * [Output Only] This token allows you to get the next page of results for list requests. If the number of results is larger than maxResults, use the nextPageToken as a value for the query parameter pageToken in the next list request. Subsequent list requests will have their own nextPageToken to continue paging through the results.
     *
     * Generated from protobuf field <code>optional string next_page_token = 79797525;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @return \Google\Cloud\Compute\V1\Warning|null
     */
    public function getWarning()
    {
        return $this->warning;
    }

    public function hasWarning()
    {
        return isset($this->warning);
    }

    public function clearWarning()
    {
        unset($this->warning);
    }

    /**
     * [Output Only] Informational warning message.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Warning warning = 50704284;</code>
     * @param \Google\Cloud\Compute\V1\Warning $var
     * @return $this
     */
    public function setWarning($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Warning::class);
        $this->warning = $var;

        return $this;
    }

}

