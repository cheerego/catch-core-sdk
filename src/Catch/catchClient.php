<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catch;

/**
 */
class catchClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catch\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ping(\Catch\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catch.catch/ping',
        $argument,
        ['\Catch\PingReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catch\RegRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function reg(\Catch\RegRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catch.catch/reg',
        $argument,
        ['\Catch\RegReply', 'decode'],
        $metadata, $options);
    }

}
