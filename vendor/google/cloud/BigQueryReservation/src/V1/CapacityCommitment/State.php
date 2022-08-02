<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment;

use UnexpectedValueException;

/**
 * Capacity commitment can either become ACTIVE right away or transition
 * from PENDING to ACTIVE or FAILED.
 *
 * Protobuf type <code>google.cloud.bigquery.reservation.v1.CapacityCommitment.State</code>
 */
class State
{
    /**
     * Invalid state value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Capacity commitment is pending provisioning. Pending capacity commitment
     * does not contribute to the project's slot_capacity.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Once slots are provisioned, capacity commitment becomes active.
     * slot_count is added to the project's slot_capacity.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * Capacity commitment is failed to be activated by the backend.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::ACTIVE => 'ACTIVE',
        self::FAILED => 'FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment_State::class);

