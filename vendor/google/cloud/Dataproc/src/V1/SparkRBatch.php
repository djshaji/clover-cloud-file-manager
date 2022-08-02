<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configuration for running an
 * [Apache SparkR](https://spark.apache.org/docs/latest/sparkr.html)
 * batch workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.SparkRBatch</code>
 */
class SparkRBatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a `.R` or `.r` file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $main_r_file_uri = '';
    /**
     * Optional. The arguments to pass to the Spark driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $args;
    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $file_uris;
    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $archive_uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_r_file_uri
     *           Required. The HCFS URI of the main R file to use as the driver.
     *           Must be a `.R` or `.r` file.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional. The arguments to pass to the Spark driver. Do not include arguments
     *           that can be set as batch properties, such as `--conf`, since a collision
     *           can occur that causes an incorrect batch submission.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $file_uris
     *           Optional. HCFS URIs of files to be placed in the working directory of
     *           each executor.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $archive_uris
     *           Optional. HCFS URIs of archives to be extracted into the working directory
     *           of each executor. Supported file types:
     *           `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Batches::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a `.R` or `.r` file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMainRFileUri()
    {
        return $this->main_r_file_uri;
    }

    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a `.R` or `.r` file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMainRFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_r_file_uri = $var;

        return $this;
    }

    /**
     * Optional. The arguments to pass to the Spark driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. The arguments to pass to the Spark driver. Do not include arguments
     * that can be set as batch properties, such as `--conf`, since a collision
     * can occur that causes an incorrect batch submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileUris()
    {
        return $this->file_uris;
    }

    /**
     * Optional. HCFS URIs of files to be placed in the working directory of
     * each executor.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArchiveUris()
    {
        return $this->archive_uris;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted into the working directory
     * of each executor. Supported file types:
     * `.jar`, `.tar`, `.tar.gz`, `.tgz`, and `.zip`.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArchiveUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->archive_uris = $arr;

        return $this;
    }

}

