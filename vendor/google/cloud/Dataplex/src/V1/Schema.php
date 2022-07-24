<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema information describing the structure and layout of the data.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Schema</code>
 */
class Schema extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Whether the schema is user-managed or managed by the service.
     * - Set user_manage to false if you would like Dataplex to help you manage
     * the schema. You will get the full service provided by Dataplex discovery,
     * including new data discovery, schema inference and schema evolution. You
     * can still provide input the schema of the entities, for example renaming a
     * schema field, changing CSV or Json options if you think the discovered
     * values are not as accurate. Dataplex will consider your input as the
     * initial schema (as if they were produced by the previous discovery run),
     * and will evolve schema or flag actions based on that.
     * - Set user_manage to true if you would like to fully manage the entity
     * schema by yourself. This is useful when you would like to manually specify
     * the schema for a table. In this case, the schema defined by the user is
     * guaranteed to be kept unchanged and would not be overwritten. But this also
     * means Dataplex will not provide schema evolution management for you.
     * Dataplex will still be able to manage partition registration (i.e., keeping
     * the list of partitions up to date) when Dataplex discovery is turned on and
     * user_managed is set to true.
     *
     * Generated from protobuf field <code>bool user_managed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $user_managed = false;
    /**
     * Optional. The sequence of fields describing data in table entities.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $fields;
    /**
     * Optional. The sequence of fields describing the partition structure in entities.
     * If this field is empty, there are no partitions within the data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.PartitionField partition_fields = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $partition_fields;
    /**
     * Optional. The structure of paths containing partition data within the entity.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.PartitionStyle partition_style = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $partition_style = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $user_managed
     *           Required. Whether the schema is user-managed or managed by the service.
     *           - Set user_manage to false if you would like Dataplex to help you manage
     *           the schema. You will get the full service provided by Dataplex discovery,
     *           including new data discovery, schema inference and schema evolution. You
     *           can still provide input the schema of the entities, for example renaming a
     *           schema field, changing CSV or Json options if you think the discovered
     *           values are not as accurate. Dataplex will consider your input as the
     *           initial schema (as if they were produced by the previous discovery run),
     *           and will evolve schema or flag actions based on that.
     *           - Set user_manage to true if you would like to fully manage the entity
     *           schema by yourself. This is useful when you would like to manually specify
     *           the schema for a table. In this case, the schema defined by the user is
     *           guaranteed to be kept unchanged and would not be overwritten. But this also
     *           means Dataplex will not provide schema evolution management for you.
     *           Dataplex will still be able to manage partition registration (i.e., keeping
     *           the list of partitions up to date) when Dataplex discovery is turned on and
     *           user_managed is set to true.
     *     @type \Google\Cloud\Dataplex\V1\Schema\SchemaField[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           Optional. The sequence of fields describing data in table entities.
     *     @type \Google\Cloud\Dataplex\V1\Schema\PartitionField[]|\Google\Protobuf\Internal\RepeatedField $partition_fields
     *           Optional. The sequence of fields describing the partition structure in entities.
     *           If this field is empty, there are no partitions within the data.
     *     @type int $partition_style
     *           Optional. The structure of paths containing partition data within the entity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Whether the schema is user-managed or managed by the service.
     * - Set user_manage to false if you would like Dataplex to help you manage
     * the schema. You will get the full service provided by Dataplex discovery,
     * including new data discovery, schema inference and schema evolution. You
     * can still provide input the schema of the entities, for example renaming a
     * schema field, changing CSV or Json options if you think the discovered
     * values are not as accurate. Dataplex will consider your input as the
     * initial schema (as if they were produced by the previous discovery run),
     * and will evolve schema or flag actions based on that.
     * - Set user_manage to true if you would like to fully manage the entity
     * schema by yourself. This is useful when you would like to manually specify
     * the schema for a table. In this case, the schema defined by the user is
     * guaranteed to be kept unchanged and would not be overwritten. But this also
     * means Dataplex will not provide schema evolution management for you.
     * Dataplex will still be able to manage partition registration (i.e., keeping
     * the list of partitions up to date) when Dataplex discovery is turned on and
     * user_managed is set to true.
     *
     * Generated from protobuf field <code>bool user_managed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return bool
     */
    public function getUserManaged()
    {
        return $this->user_managed;
    }

    /**
     * Required. Whether the schema is user-managed or managed by the service.
     * - Set user_manage to false if you would like Dataplex to help you manage
     * the schema. You will get the full service provided by Dataplex discovery,
     * including new data discovery, schema inference and schema evolution. You
     * can still provide input the schema of the entities, for example renaming a
     * schema field, changing CSV or Json options if you think the discovered
     * values are not as accurate. Dataplex will consider your input as the
     * initial schema (as if they were produced by the previous discovery run),
     * and will evolve schema or flag actions based on that.
     * - Set user_manage to true if you would like to fully manage the entity
     * schema by yourself. This is useful when you would like to manually specify
     * the schema for a table. In this case, the schema defined by the user is
     * guaranteed to be kept unchanged and would not be overwritten. But this also
     * means Dataplex will not provide schema evolution management for you.
     * Dataplex will still be able to manage partition registration (i.e., keeping
     * the list of partitions up to date) when Dataplex discovery is turned on and
     * user_managed is set to true.
     *
     * Generated from protobuf field <code>bool user_managed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param bool $var
     * @return $this
     */
    public function setUserManaged($var)
    {
        GPBUtil::checkBool($var);
        $this->user_managed = $var;

        return $this;
    }

    /**
     * Optional. The sequence of fields describing data in table entities.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Optional. The sequence of fields describing data in table entities.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.SchemaField fields = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Schema\SchemaField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\Schema\SchemaField::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Optional. The sequence of fields describing the partition structure in entities.
     * If this field is empty, there are no partitions within the data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.PartitionField partition_fields = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionFields()
    {
        return $this->partition_fields;
    }

    /**
     * Optional. The sequence of fields describing the partition structure in entities.
     * If this field is empty, there are no partitions within the data.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.Schema.PartitionField partition_fields = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Schema\PartitionField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\Schema\PartitionField::class);
        $this->partition_fields = $arr;

        return $this;
    }

    /**
     * Optional. The structure of paths containing partition data within the entity.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.PartitionStyle partition_style = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPartitionStyle()
    {
        return $this->partition_style;
    }

    /**
     * Optional. The structure of paths containing partition data within the entity.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Schema.PartitionStyle partition_style = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPartitionStyle($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\Schema\PartitionStyle::class);
        $this->partition_style = $var;

        return $this;
    }

}
