<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * Messages from /proto/clarifai/api/audio.proto
 * //////////////////////////////////////////////////////////////////////////////
 *
 * Generated from protobuf message <code>clarifai.api.Audio</code>
 */
class Audio extends \Google\Protobuf\Internal\Message
{
    /**
     * This is a URL to a publicly accessible image file. The platform will download this file server
     * side and then process.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * The base64 field is using image file bytes directly in the request.
     * NOTE: if you're sending a json request, then this MUST be base64 encoded before sending (hence
     * the name here).
     * When using our grpc clients, you DO NOT need to base64 encode
     * it yourself since the clients know how to do this for you automatically and will avoid the
     * base64 encoding if they send a binary request.
     *
     * Generated from protobuf field <code>bytes base64 = 2;</code>
     */
    protected $base64 = '';
    /**
     * If True then you will be allowed to have multiple urls.
     *
     * Generated from protobuf field <code>bool allow_duplicate_url = 4;</code>
     */
    protected $allow_duplicate_url = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           This is a URL to a publicly accessible image file. The platform will download this file server
     *           side and then process.
     *     @type string $base64
     *           The base64 field is using image file bytes directly in the request.
     *           NOTE: if you're sending a json request, then this MUST be base64 encoded before sending (hence
     *           the name here).
     *           When using our grpc clients, you DO NOT need to base64 encode
     *           it yourself since the clients know how to do this for you automatically and will avoid the
     *           base64 encoding if they send a binary request.
     *     @type bool $allow_duplicate_url
     *           If True then you will be allowed to have multiple urls.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Clarifai\Api\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * This is a URL to a publicly accessible image file. The platform will download this file server
     * side and then process.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * This is a URL to a publicly accessible image file. The platform will download this file server
     * side and then process.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * The base64 field is using image file bytes directly in the request.
     * NOTE: if you're sending a json request, then this MUST be base64 encoded before sending (hence
     * the name here).
     * When using our grpc clients, you DO NOT need to base64 encode
     * it yourself since the clients know how to do this for you automatically and will avoid the
     * base64 encoding if they send a binary request.
     *
     * Generated from protobuf field <code>bytes base64 = 2;</code>
     * @return string
     */
    public function getBase64()
    {
        return $this->base64;
    }

    /**
     * The base64 field is using image file bytes directly in the request.
     * NOTE: if you're sending a json request, then this MUST be base64 encoded before sending (hence
     * the name here).
     * When using our grpc clients, you DO NOT need to base64 encode
     * it yourself since the clients know how to do this for you automatically and will avoid the
     * base64 encoding if they send a binary request.
     *
     * Generated from protobuf field <code>bytes base64 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBase64($var)
    {
        GPBUtil::checkString($var, False);
        $this->base64 = $var;

        return $this;
    }

    /**
     * If True then you will be allowed to have multiple urls.
     *
     * Generated from protobuf field <code>bool allow_duplicate_url = 4;</code>
     * @return bool
     */
    public function getAllowDuplicateUrl()
    {
        return $this->allow_duplicate_url;
    }

    /**
     * If True then you will be allowed to have multiple urls.
     *
     * Generated from protobuf field <code>bool allow_duplicate_url = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowDuplicateUrl($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_duplicate_url = $var;

        return $this;
    }

}

