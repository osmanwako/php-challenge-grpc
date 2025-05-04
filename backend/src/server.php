<?php
require __DIR__.'/EchoService/EchoServiceInterface.php';
require __DIR__.'/GPBMetadata/Echo.php';
require __DIR__.'/EchoService/EchoRequest.php';
require __DIR__.'/EchoService/EchoResponse.php';

class EchoService implements EchoService\EchoServiceInterface {
    public function Ping(\EchoService\EchoRequest $request): \EchoService\EchoResponse {
        $response = new \EchoService\EchoResponse();
        $response->setMessage("Server received: " . $request->getMessage());
        return $response;
    }
}

$server = new \Spiral\GRPC\Server();
$server->registerService(EchoService\EchoServiceInterface::class, new EchoService());
$server->serve("0.0.0.0:50051");
