<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * @test
     * A basic unit test example.
     *
     * @return void
     */
    public function defaultPageTitle()
    {
        // dd(page_title(''));
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /**
     * @test
     * A basic unit test example.
     *
     * @return void
     */
    public function pageTitle()
    {
        // dd(page_title(''));
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    }
}
