<?php
/**
 * Tests for PinokioInstall
 */

use PHPUnit\Framework\TestCase;
use Pinokioinstall\Pinokioinstall;

class PinokioinstallTest extends TestCase {
    private Pinokioinstall $instance;

    protected function setUp(): void {
        $this->instance = new Pinokioinstall(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pinokioinstall::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
