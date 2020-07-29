<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.DeleteCollaboratorsRequest</code>
 */
class DeleteCollaboratorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Generated from protobuf field <code>repeated string collaborator_ids = 2;</code>
     */
    private $collaborator_ids;
    /**
     * Generated from protobuf field <code>repeated string user_emails = 3;</code>
     */
    private $user_emails;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $collaborator_ids
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $user_emails
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    /**
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @param \Clarifai\Api\UserAppIDSet $var
     * @return $this
     */
    public function setUserAppId($var)
    {
        GPBUtil::checkMessage($var, \Clarifai\Api\UserAppIDSet::class);
        $this->user_app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string collaborator_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollaboratorIds()
    {
        return $this->collaborator_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string collaborator_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollaboratorIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collaborator_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string user_emails = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserEmails()
    {
        return $this->user_emails;
    }

    /**
     * Generated from protobuf field <code>repeated string user_emails = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->user_emails = $arr;

        return $this;
    }

}
