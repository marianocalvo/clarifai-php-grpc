<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/service.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>clarifai.api.PostStatValuesAggregateRequest</code>
 */
class PostStatValuesAggregateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Ids present in the url of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     */
    protected $user_app_id = null;
    /**
     * Query to retrieve aggregate values.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregateQuery stat_value_aggregate_queries = 2;</code>
     */
    private $stat_value_aggregate_queries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Clarifai\Api\UserAppIDSet $user_app_id
     *           Ids present in the url of the request.
     *     @type \Clarifai\Api\StatValueAggregateQuery[]|\Google\Protobuf\Internal\RepeatedField $stat_value_aggregate_queries
     *           Query to retrieve aggregate values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Ids present in the url of the request.
     *
     * Generated from protobuf field <code>.clarifai.api.UserAppIDSet user_app_id = 1;</code>
     * @return \Clarifai\Api\UserAppIDSet
     */
    public function getUserAppId()
    {
        return $this->user_app_id;
    }

    /**
     * Ids present in the url of the request.
     *
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
     * Query to retrieve aggregate values.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregateQuery stat_value_aggregate_queries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatValueAggregateQueries()
    {
        return $this->stat_value_aggregate_queries;
    }

    /**
     * Query to retrieve aggregate values.
     *
     * Generated from protobuf field <code>repeated .clarifai.api.StatValueAggregateQuery stat_value_aggregate_queries = 2;</code>
     * @param \Clarifai\Api\StatValueAggregateQuery[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatValueAggregateQueries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Clarifai\Api\StatValueAggregateQuery::class);
        $this->stat_value_aggregate_queries = $arr;

        return $this;
    }

}
