<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for article suggestion models.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ArticleSuggestionModelMetadata</code>
 */
class ArticleSuggestionModelMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Type of the article suggestion model. If not provided, model_type is used.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationModel.ModelType training_model_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $training_model_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $training_model_type
     *           Optional. Type of the article suggestion model. If not provided, model_type is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Type of the article suggestion model. If not provided, model_type is used.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationModel.ModelType training_model_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTrainingModelType()
    {
        return $this->training_model_type;
    }

    /**
     * Optional. Type of the article suggestion model. If not provided, model_type is used.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ConversationModel.ModelType training_model_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTrainingModelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\ConversationModel\ModelType::class);
        $this->training_model_type = $var;

        return $this;
    }

}

