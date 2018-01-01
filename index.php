<?php
require 'vendor/autoload.php';
//$client = new \Hello\helloClient('localhost:50025',[
//    'credentials' => Grpc\ChannelCredentials::createInsecure()
//]);
//
//$r = new Hello\pingRequest();
//$data = $client->say($r->setMessage('123'))->wait();
//var_dump($data);


//$client = new \Helloworld\helloworldClient('localhost:50025',[
//    'credentials' => Grpc\ChannelCredentials::createInsecure()
//]);
//
//$r = new Helloworld\PingRequest();
//$data = $client->SayHello($r->setName('123'))->wait();
//print_r($data);


$client = new \Ping\pingClient('127.0.0.1:50052',[
    'credentials' => Grpc\ChannelCredentials::createInsecure()
]);

$r = new \Ping\pingRequest();
$data = $client->ping($r)->wait();
var_dump($data);

//$client = new \Helloworld\helloworldClient('127.0.0.1:50052',[
//    'credentials' => Grpc\ChannelCredentials::createInsecure()
//]);
//
//$r = new Helloworld\PingRequest();
//$data = $client->SayHello($r->setName('123'))->wait();
//list($reply, $status) = $data;
//var_dump($reply->getMessage());