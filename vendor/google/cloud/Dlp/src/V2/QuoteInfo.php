<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for infoType-dependent details parsed from quote.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.QuoteInfo</code>
 */
class QuoteInfo extends \Google\Protobuf\Internal\Message
{
    protected $parsed_quote;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DateTime $date_time
     *           The date time indicated by the quote.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The date time indicated by the quote.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DateTime date_time = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DateTime|null
     */
    public function getDateTime()
    {
        return $this->readOneof(2);
    }

    public function hasDateTime()
    {
        return $this->hasOneof(2);
    }

    /**
     * The date time indicated by the quote.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DateTime date_time = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DateTime $var
     * @return $this
     */
    public function setDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DateTime::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getParsedQuote()
    {
        return $this->whichOneof("parsed_quote");
    }

}

