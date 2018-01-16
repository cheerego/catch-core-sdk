<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Operation;

/**
 */
class operationClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Operation\LaunchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Launch(\Operation\LaunchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/operation.operation/Launch',
        $argument,
        ['\Operation\CommonReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Operation\LaunchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Unlimited(\Operation\LaunchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/operation.operation/Unlimited',
        $argument,
        ['\Operation\CommonReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Operation\OperateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Operate(\Operation\OperateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/operation.operation/Operate',
        $argument,
        ['\Operation\CommonReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Operation\BroadcastRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Broadcast(\Operation\BroadcastRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/operation.operation/Broadcast',
        $argument,
        ['\Operation\CommonReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Operation\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Search(\Operation\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/operation.operation/Search',
        $argument,
        ['\Operation\CommonReply', 'decode'],
        $metadata, $options);
    }

}
