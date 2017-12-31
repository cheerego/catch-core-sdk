<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Ping;

/**
 */
class pingClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Ping\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ping(\Ping\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ping.ping/ping',
        $argument,
        ['\Ping\PingReply', 'decode'],
        $metadata, $options);
    }

}
