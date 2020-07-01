<?php

namespace Vendor\Package\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Vendor\Package\Tests\TestCase;

class PackageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function exampleTest()
    {
        $this->assertTrue(true);
    }
}
