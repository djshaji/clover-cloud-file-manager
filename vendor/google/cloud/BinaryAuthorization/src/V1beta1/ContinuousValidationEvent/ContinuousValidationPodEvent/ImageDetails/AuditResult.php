<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails;

use UnexpectedValueException;

/**
 * Result of the audit.
 *
 * Protobuf type <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails.AuditResult</code>
 */
class AuditResult
{
    /**
     * Unspecified result. This is an error.
     *
     * Generated from protobuf enum <code>AUDIT_RESULT_UNSPECIFIED = 0;</code>
     */
    const AUDIT_RESULT_UNSPECIFIED = 0;
    /**
     * Image is allowed.
     *
     * Generated from protobuf enum <code>ALLOW = 1;</code>
     */
    const ALLOW = 1;
    /**
     * Image is denied.
     *
     * Generated from protobuf enum <code>DENY = 2;</code>
     */
    const DENY = 2;

    private static $valueToName = [
        self::AUDIT_RESULT_UNSPECIFIED => 'AUDIT_RESULT_UNSPECIFIED',
        self::ALLOW => 'ALLOW',
        self::DENY => 'DENY',
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
class_alias(AuditResult::class, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent_ContinuousValidationPodEvent_ImageDetails_AuditResult::class);
