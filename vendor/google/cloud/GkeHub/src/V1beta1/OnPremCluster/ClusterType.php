<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1\OnPremCluster;

use UnexpectedValueException;

/**
 * ClusterType describes on prem cluster's type.
 *
 * Protobuf type <code>google.cloud.gkehub.v1beta1.OnPremCluster.ClusterType</code>
 */
class ClusterType
{
    /**
     * The ClusterType is not set.
     *
     * Generated from protobuf enum <code>CLUSTERTYPE_UNSPECIFIED = 0;</code>
     */
    const CLUSTERTYPE_UNSPECIFIED = 0;
    /**
     * The ClusterType is bootstrap cluster.
     *
     * Generated from protobuf enum <code>BOOTSTRAP = 1;</code>
     */
    const BOOTSTRAP = 1;
    /**
     * The ClusterType is baremetal hybrid cluster.
     *
     * Generated from protobuf enum <code>HYBRID = 2;</code>
     */
    const HYBRID = 2;
    /**
     * The ClusterType is baremetal standalone cluster.
     *
     * Generated from protobuf enum <code>STANDALONE = 3;</code>
     */
    const STANDALONE = 3;
    /**
     * The ClusterType is user cluster.
     *
     * Generated from protobuf enum <code>USER = 4;</code>
     */
    const USER = 4;

    private static $valueToName = [
        self::CLUSTERTYPE_UNSPECIFIED => 'CLUSTERTYPE_UNSPECIFIED',
        self::BOOTSTRAP => 'BOOTSTRAP',
        self::HYBRID => 'HYBRID',
        self::STANDALONE => 'STANDALONE',
        self::USER => 'USER',
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
class_alias(ClusterType::class, \Google\Cloud\GkeHub\V1beta1\OnPremCluster_ClusterType::class);

