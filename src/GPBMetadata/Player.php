<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: player.proto

namespace GPBMetadata;

class Player
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa020a0c706c617965722e70726f746f1206706c6179657222280a0a72" .
            "656752657175657374120d0a056170706964180120012809120b0a037569" .
            "64180220012809223a0a087265675265706c79120b0a0372657418012001" .
            "2805120f0a076d65737361676518022001280912100a08726573706f6e73" .
            "65180320012809221b0a0b70696e6752657175657374120c0a046e616d65" .
            "180120012809221c0a0970696e675265706c79120f0a076d657373616765" .
            "18022001280932690a06706c61796572122d0a0372656712122e706c6179" .
            "65722e726567526571756573741a102e706c617965722e7265675265706c" .
            "79220012300a0470696e6712132e706c617965722e70696e675265717565" .
            "73741a112e706c617965722e70696e675265706c792200620670726f746f" .
            "33"
        ));

        static::$is_initialized = true;
    }
}
