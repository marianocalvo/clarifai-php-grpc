<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/api/resources.proto

namespace Clarifai\Api;

use UnexpectedValueException;

/**
 * Protobuf type <code>clarifai.api.LicenseScope</code>
 */
class LicenseScope
{
    /**
     * Generated from protobuf enum <code>LICENSE_SCOPE_NOT_SET = 0;</code>
     */
    const LICENSE_SCOPE_NOT_SET = 0;
    /**
     * Generated from protobuf enum <code>PREDICT = 1;</code>
     */
    const PREDICT = 1;
    /**
     * Generated from protobuf enum <code>TRAIN = 2;</code>
     */
    const TRAIN = 2;
    /**
     * Generated from protobuf enum <code>SEARCH = 3;</code>
     */
    const SEARCH = 3;

    private static $valueToName = [
        self::LICENSE_SCOPE_NOT_SET => 'LICENSE_SCOPE_NOT_SET',
        self::PREDICT => 'PREDICT',
        self::TRAIN => 'TRAIN',
        self::SEARCH => 'SEARCH',
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
