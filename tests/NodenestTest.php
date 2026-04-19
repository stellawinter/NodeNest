<?php
/**
 * Tests for NodeNest
 */

use PHPUnit\Framework\TestCase;
use Nodenest\Nodenest;

class NodenestTest extends TestCase {
    private Nodenest $instance;

    protected function setUp(): void {
        $this->instance = new Nodenest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodenest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
