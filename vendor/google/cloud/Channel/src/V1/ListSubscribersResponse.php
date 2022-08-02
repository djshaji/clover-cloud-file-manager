<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response Message for ListSubscribers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListSubscribersResponse</code>
 */
class ListSubscribersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the topic registered with the reseller.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';
    /**
     * List of service accounts which have subscriber access to the topic.
     *
     * Generated from protobuf field <code>repeated string service_accounts = 2;</code>
     */
    private $service_accounts;
    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Name of the topic registered with the reseller.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $service_accounts
     *           List of service accounts which have subscriber access to the topic.
     *     @type string $next_page_token
     *           A token that can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the topic registered with the reseller.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Name of the topic registered with the reseller.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * List of service accounts which have subscriber access to the topic.
     *
     * Generated from protobuf field <code>repeated string service_accounts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccounts()
    {
        return $this->service_accounts;
    }

    /**
     * List of service accounts which have subscriber access to the topic.
     *
     * Generated from protobuf field <code>repeated string service_accounts = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->service_accounts = $arr;

        return $this;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

