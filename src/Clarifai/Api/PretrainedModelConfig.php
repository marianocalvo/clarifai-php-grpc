<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PretrainedModelConfig</code>
 */
class PretrainedModelConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the internal id of the pretrained model.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * This is the internal type of the pretrained model.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Map from the api.Data field names to the Triton config.pbtxt input.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct input_fields_map = 3;</code>
     */
    protected $input_fields_map = null;
    /**
     * Map from the api.Data field names to the Triton config.pbtxt output.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct output_fields_map = 4;</code>
     */
    protected $output_fields_map = null;
    /**
     * Preprocessing steps for the model as a json string
     *
     * Generated from protobuf field <code>string data_provider_params = 5;</code>
     */
    protected $data_provider_params = '';
    /**
     * Url to a zipped up model in triton format with only version 1
     *
     * Generated from protobuf field <code>string model_zip_url = 6;</code>
     */
    protected $model_zip_url = '';
    /**
     * Whether to overwrite the model for the existing internal id
     *
     * Generated from protobuf field <code>bool overwrite = 7;</code>
     */
    protected $overwrite = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           This is the internal id of the pretrained model.
     *     @type string $type
     *           This is the internal type of the pretrained model.
     *     @type \Google\Protobuf\Struct $input_fields_map
     *           Map from the api.Data field names to the Triton config.pbtxt input.
     *     @type \Google\Protobuf\Struct $output_fields_map
     *           Map from the api.Data field names to the Triton config.pbtxt output.
     *     @type string $data_provider_params
     *           Preprocessing steps for the model as a json string
     *     @type string $model_zip_url
     *           Url to a zipped up model in triton format with only version 1
     *     @type bool $overwrite
     *           Whether to overwrite the model for the existing internal id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the internal id of the pretrained model.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * This is the internal id of the pretrained model.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * This is the internal type of the pretrained model.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * This is the internal type of the pretrained model.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Map from the api.Data field names to the Triton config.pbtxt input.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct input_fields_map = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getInputFieldsMap()
    {
        return $this->input_fields_map;
    }

    /**
     * Map from the api.Data field names to the Triton config.pbtxt input.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct input_fields_map = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setInputFieldsMap($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->input_fields_map = $var;

        return $this;
    }

    /**
     * Map from the api.Data field names to the Triton config.pbtxt output.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct output_fields_map = 4;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getOutputFieldsMap()
    {
        return $this->output_fields_map;
    }

    /**
     * Map from the api.Data field names to the Triton config.pbtxt output.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct output_fields_map = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setOutputFieldsMap($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->output_fields_map = $var;

        return $this;
    }

    /**
     * Preprocessing steps for the model as a json string
     *
     * Generated from protobuf field <code>string data_provider_params = 5;</code>
     * @return string
     */
    public function getDataProviderParams()
    {
        return $this->data_provider_params;
    }

    /**
     * Preprocessing steps for the model as a json string
     *
     * Generated from protobuf field <code>string data_provider_params = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDataProviderParams($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_provider_params = $var;

        return $this;
    }

    /**
     * Url to a zipped up model in triton format with only version 1
     *
     * Generated from protobuf field <code>string model_zip_url = 6;</code>
     * @return string
     */
    public function getModelZipUrl()
    {
        return $this->model_zip_url;
    }

    /**
     * Url to a zipped up model in triton format with only version 1
     *
     * Generated from protobuf field <code>string model_zip_url = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setModelZipUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_zip_url = $var;

        return $this;
    }

    /**
     * Whether to overwrite the model for the existing internal id
     *
     * Generated from protobuf field <code>bool overwrite = 7;</code>
     * @return bool
     */
    public function getOverwrite()
    {
        return $this->overwrite;
    }

    /**
     * Whether to overwrite the model for the existing internal id
     *
     * Generated from protobuf field <code>bool overwrite = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setOverwrite($var)
    {
        GPBUtil::checkBool($var);
        $this->overwrite = $var;

        return $this;
    }

}

