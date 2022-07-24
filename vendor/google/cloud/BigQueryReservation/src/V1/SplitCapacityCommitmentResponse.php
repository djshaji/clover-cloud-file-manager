<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [ReservationService.SplitCapacityCommitment][google.cloud.bigquery.reservation.v1.ReservationService.SplitCapacityCommitment].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.SplitCapacityCommitmentResponse</code>
 */
class SplitCapacityCommitmentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * First capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment first = 1;</code>
     */
    private $first = null;
    /**
     * Second capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment second = 2;</code>
     */
    private $second = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $first
     *           First capacity commitment, result of a split.
     *     @type \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $second
     *           Second capacity commitment, result of a split.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * First capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment first = 1;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment|null
     */
    public function getFirst()
    {
        return $this->first;
    }

    public function hasFirst()
    {
        return isset($this->first);
    }

    public function clearFirst()
    {
        unset($this->first);
    }

    /**
     * First capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment first = 1;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $var
     * @return $this
     */
    public function setFirst($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment::class);
        $this->first = $var;

        return $this;
    }

    /**
     * Second capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment second = 2;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment|null
     */
    public function getSecond()
    {
        return $this->second;
    }

    public function hasSecond()
    {
        return isset($this->second);
    }

    public function clearSecond()
    {
        unset($this->second);
    }

    /**
     * Second capacity commitment, result of a split.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment second = 2;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $var
     * @return $this
     */
    public function setSecond($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment::class);
        $this->second = $var;

        return $this;
    }

}

