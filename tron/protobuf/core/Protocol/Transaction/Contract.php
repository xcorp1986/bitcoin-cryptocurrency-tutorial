<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\Transaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Transaction.Contract</code>
 */
class Contract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     */
    protected $parameter = null;
    /**
     * Generated from protobuf field <code>bytes provider = 3;</code>
     */
    protected $provider = '';
    /**
     * Generated from protobuf field <code>bytes ContractName = 4;</code>
     */
    protected $ContractName = '';
    /**
     * Generated from protobuf field <code>int32 Permission_id = 5;</code>
     */
    protected $Permission_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type \Google\Protobuf\Any $parameter
     *     @type string $provider
     *     @type string $ContractName
     *     @type int $Permission_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.protocol.Transaction.Contract.ContractType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Protocol\Transaction\Contract\ContractType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     * @return \Google\Protobuf\Any
     */
    public function getParameter()
    {
        return isset($this->parameter) ? $this->parameter : null;
    }

    public function hasParameter()
    {
        return isset($this->parameter);
    }

    public function clearParameter()
    {
        unset($this->parameter);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Any parameter = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->parameter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes provider = 3;</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Generated from protobuf field <code>bytes provider = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, False);
        $this->provider = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes ContractName = 4;</code>
     * @return string
     */
    public function getContractName()
    {
        return $this->ContractName;
    }

    /**
     * Generated from protobuf field <code>bytes ContractName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContractName($var)
    {
        GPBUtil::checkString($var, False);
        $this->ContractName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Permission_id = 5;</code>
     * @return int
     */
    public function getPermissionId()
    {
        return $this->Permission_id;
    }

    /**
     * Generated from protobuf field <code>int32 Permission_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissionId($var)
    {
        GPBUtil::checkInt32($var);
        $this->Permission_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Contract::class, \Protocol\Transaction_Contract::class);

