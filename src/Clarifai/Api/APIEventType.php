<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.APIEventType</code>
 */
class APIEventType
{
    /**
     * Generated from protobuf enum <code>API_EVENT_TYPE_NOT_SET = 0;</code>
     */
    const API_EVENT_TYPE_NOT_SET = 0;
    /**
     * On Prem event types
     *
     * Generated from protobuf enum <code>ON_PREM_PREDICT = 1;</code>
     */
    const ON_PREM_PREDICT = 1;
    /**
     * Generated from protobuf enum <code>ON_PREM_TRAIN = 2;</code>
     */
    const ON_PREM_TRAIN = 2;
    /**
     * Generated from protobuf enum <code>ON_PREM_SEARCH = 3;</code>
     */
    const ON_PREM_SEARCH = 3;

    private static $valueToName = [
        self::API_EVENT_TYPE_NOT_SET => 'API_EVENT_TYPE_NOT_SET',
        self::ON_PREM_PREDICT => 'ON_PREM_PREDICT',
        self::ON_PREM_TRAIN => 'ON_PREM_TRAIN',
        self::ON_PREM_SEARCH => 'ON_PREM_SEARCH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

