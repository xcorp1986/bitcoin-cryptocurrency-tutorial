<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/storage_contract.proto

namespace GPBMetadata\Core\Contract;

class StorageContract
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
$core/contract/storage_contract.protoprotocol"?
BuyStorageBytesContract
owner_address (
bytes (":
BuyStorageContract
owner_address (
quant ("C
SellStorageContract
owner_address (
storage_bytes ("C
UpdateBrokerageContract
owner_address (
	brokerage (BE
org.tron.protos.contractZ)github.com/tronprotocol/grpc-gateway/corebproto3'
        , true);

        static::$is_initialized = true;
    }
}

