<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Test1 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function httpRoute() {
      $res = $this->get('/employee');
      $res->assertSuccessful(200);
    }

    public function registRoute() {
      $res = $this->get('/employee/regist');
      $res->assertStatus(200);
    }

    public function notFound() {
      $this->get('/test')->assertStatus(404);
    }
}
