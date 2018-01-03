#!/usr/bin/env bash


protoc --proto_path=./protos --php_out=./src/php  --grpc_out=./src/php --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin ./protos/$1.proto