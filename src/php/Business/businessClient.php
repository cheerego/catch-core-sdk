<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Business;

/**
 */
class businessClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Business\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Login(\Business\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/business.business/Login',
        $argument,
        ['\Business\CommonReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Business\PlayRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PlayGame(\Business\PlayRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/business.business/PlayGame',
        $argument,
        ['\Business\CommonReply', 'decode'],
        $metadata, $options);
    }

}
