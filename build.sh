#!/usr/bin/env bash


protoc --proto_path=./protos --php_out=./src  --grpc_out=./src --plugin=protoc-gen-grpc=/usr/local/bin/grpc_php_plugin ./protos/$1.proto