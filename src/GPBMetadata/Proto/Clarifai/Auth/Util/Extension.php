<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/clarifai/auth/util/extension.proto

namespace GPBMetadata\Proto\Clarifai\Auth\Util;

class Extension
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Proto\Clarifai\Auth\Scope\Scope::initOnce();
        \GPBMetadata\Proto\Clarifai\Auth\Types\Types::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abd010a2870726f746f2f636c6172696661692f617574682f7574696c2f" .
            "657874656e73696f6e2e70726f746f1212636c6172696661692e61757468" .
            "2e7574696c1a2570726f746f2f636c6172696661692f617574682f747970" .
            "65732f74797065732e70726f746f1a20676f6f676c652f70726f746f6275" .
            "662f64657363726970746f722e70726f746f422c0a1b636f6d2e636c6172" .
            "696661692e677270632e617574682e7574696c50015a047574696ca20204" .
            "43414950620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

