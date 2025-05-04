use EchoService\EchoRequest;
use EchoService\EchoResponse;

class EchoServiceTest extends PHPUnit\Framework\TestCase {
    public function testPing() {
        $service = new EchoService();
        $request = new EchoRequest();
        $request->setMessage("test");
        
        $response = $service->Ping($request);
        $this->assertStringContainsString("test", $response->getMessage());
    }
}
