<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use WithoutMiddleware;

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
