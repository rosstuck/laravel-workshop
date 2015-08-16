<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return void
     */
    public function testAllIsRightWithTheWorld()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
