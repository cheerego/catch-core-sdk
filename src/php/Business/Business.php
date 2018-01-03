<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: business.proto

namespace Business;

/**
 */
interface Business
{
  /**
   * @param \Business\LoginRequest $argument input argument
   * @param array $metadata metadata
   * @param array $options call options
   */
  public function Login(\Business\LoginRequest $argument, $metadata = [], $options = []) : \Business\CommonReply;
  /**
   * @param \Business\PlayRequest $argument input argument
   * @param array $metadata metadata
   * @param array $options call options
   */
  public function PlayGame(\Business\PlayRequest $argument, $metadata = [], $options = []) : \Business\CommonReply;
}
