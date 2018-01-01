<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catchme;

/**
 */
class catchmeClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catchme\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ping(\Catchme\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catchme.catchme/ping',
        $argument,
        ['\Catchme\PingReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catchme\RegRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function reg(\Catchme\RegRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catchme.catchme/reg',
        $argument,
        ['\Catchme\RegReply', 'decode'],
        $metadata, $options);
    }

}
