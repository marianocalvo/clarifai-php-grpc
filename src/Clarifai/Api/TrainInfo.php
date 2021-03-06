<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.TrainInfo</code>
 */
class TrainInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * To control the training process when PostModelVersions is used we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training, the settings
     * contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     */
    protected $params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Struct $params
     *           To control the training process when PostModelVersions is used we allow a list of parameters
     *           defined for each ModelType as a Struct (JSON object) here. During training, the settings
     *           contained within are sent to the training processor to alter the training process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * To control the training process when PostModelVersions is used we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training, the settings
     * contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * To control the training process when PostModelVersions is used we allow a list of parameters
     * defined for each ModelType as a Struct (JSON object) here. During training, the settings
     * contained within are sent to the training processor to alter the training process.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 1;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

}

