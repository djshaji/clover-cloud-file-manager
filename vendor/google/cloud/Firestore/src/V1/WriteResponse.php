<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Firestore.Write][google.firestore.v1.Firestore.Write].
 *
 * Generated from protobuf message <code>google.firestore.v1.WriteResponse</code>
 */
class WriteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the stream.
     * Only set on the first message, when a new stream was created.
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     */
    private $stream_id = '';
    /**
     * A token that represents the position of this response in the stream.
     * This can be used by a client to resume the stream at this point.
     * This field is always set.
     *
     * Generated from protobuf field <code>bytes stream_token = 2;</code>
     */
    private $stream_token = '';
    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 3;</code>
     */
    private $write_results;
    /**
     * The time at which the commit occurred. Any read with an equal or greater
     * `read_time` is guaranteed to see the effects of the write.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4;</code>
     */
    private $commit_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stream_id
     *           The ID of the stream.
     *           Only set on the first message, when a new stream was created.
     *     @type string $stream_token
     *           A token that represents the position of this response in the stream.
     *           This can be used by a client to resume the stream at this point.
     *           This field is always set.
     *     @type \Google\Cloud\Firestore\V1\WriteResult[]|\Google\Protobuf\Internal\RepeatedField $write_results
     *           The result of applying the writes.
     *           This i-th write result corresponds to the i-th write in the
     *           request.
     *     @type \Google\Protobuf\Timestamp $commit_time
     *           The time at which the commit occurred. Any read with an equal or greater
     *           `read_time` is guaranteed to see the effects of the write.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the stream.
     * Only set on the first message, when a new stream was created.
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * The ID of the stream.
     * Only set on the first message, when a new stream was created.
     *
     * Generated from protobuf field <code>string stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

    /**
     * A token that represents the position of this response in the stream.
     * This can be used by a client to resume the stream at this point.
     * This field is always set.
     *
     * Generated from protobuf field <code>bytes stream_token = 2;</code>
     * @return string
     */
    public function getStreamToken()
    {
        return $this->stream_token;
    }

    /**
     * A token that represents the position of this response in the stream.
     * This can be used by a client to resume the stream at this point.
     * This field is always set.
     *
     * Generated from protobuf field <code>bytes stream_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->stream_token = $var;

        return $this;
    }

    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriteResults()
    {
        return $this->write_results;
    }

    /**
     * The result of applying the writes.
     * This i-th write result corresponds to the i-th write in the
     * request.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.WriteResult write_results = 3;</code>
     * @param \Google\Cloud\Firestore\V1\WriteResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriteResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\WriteResult::class);
        $this->write_results = $arr;

        return $this;
    }

    /**
     * The time at which the commit occurred. Any read with an equal or greater
     * `read_time` is guaranteed to see the effects of the write.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCommitTime()
    {
        return $this->commit_time;
    }

    public function hasCommitTime()
    {
        return isset($this->commit_time);
    }

    public function clearCommitTime()
    {
        unset($this->commit_time);
    }

    /**
     * The time at which the commit occurred. Any read with an equal or greater
     * `read_time` is guaranteed to see the effects of the write.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp commit_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCommitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->commit_time = $var;

        return $this;
    }

}

