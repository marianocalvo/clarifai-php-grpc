<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.SingleInputCountResponse</code>
 */
class SingleInputCountResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * NOTE: inconsistency: not named after the object name.
     *
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     */
    protected $counts = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\Status\Status $status
     *     @type \Clarifai\Api\InputCount $counts
     *           NOTE: inconsistency: not named after the object name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @return \Clarifai\Api\Status\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.status.Status status = 1;</code>
     * @param \Clarifai\Api\Status\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\Status\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * NOTE: inconsistency: not named after the object name.
     *
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     * @return \Clarifai\Api\InputCount
     */
    public function getCounts()
    {
        return $this->counts;
    }

    /**
     * NOTE: inconsistency: not named after the object name.
     *
     * Generated from protobuf field <code>.clarifai.api.InputCount counts = 2;</code>
     * @param \Clarifai\Api\InputCount $var
     * @return $this
     */
    public function setCounts($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\InputCount::class);
        $this->counts = $var;

        return $this;
    }

}

