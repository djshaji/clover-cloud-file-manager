<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PubsubConfig describes the configuration of a trigger that
 * creates a build whenever a Pub/Sub message is published.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.PubsubConfig</code>
 */
class PubsubConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the subscription. Format is
     * `projects/{project}/subscriptions/{subscription}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    /**
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 2 [(.google.api.resource_reference) = {</code>
     */
    private $topic = '';
    /**
     * Service account that will make the push request.
     *
     * Generated from protobuf field <code>string service_account_email = 3 [(.google.api.resource_reference) = {</code>
     */
    private $service_account_email = '';
    /**
     * Potential issues with the underlying Pub/Sub subscription configuration.
     * Only populated on get requests.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig.State state = 4;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Output only. Name of the subscription. Format is
     *           `projects/{project}/subscriptions/{subscription}`.
     *     @type string $topic
     *           The name of the topic from which this subscription is receiving messages.
     *           Format is `projects/{project}/topics/{topic}`.
     *     @type string $service_account_email
     *           Service account that will make the push request.
     *     @type int $state
     *           Potential issues with the underlying Pub/Sub subscription configuration.
     *           Only populated on get requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the subscription. Format is
     * `projects/{project}/subscriptions/{subscription}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Output only. Name of the subscription. Format is
     * `projects/{project}/subscriptions/{subscription}`.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 2 [(.google.api.resource_reference) = {</code>
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
     * Service account that will make the push request.
     *
     * Generated from protobuf field <code>string service_account_email = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * Service account that will make the push request.
     *
     * Generated from protobuf field <code>string service_account_email = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * Potential issues with the underlying Pub/Sub subscription configuration.
     * Only populated on get requests.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Potential issues with the underlying Pub/Sub subscription configuration.
     * Only populated on get requests.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\PubsubConfig\State::class);
        $this->state = $var;

        return $this;
    }

}

