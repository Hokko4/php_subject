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
    //phpunitの仕様でメソッド名の頭に「test」をつけるらしい。

    public function testHttpRoute() {
      $res = $this->get('/employee');
      $res->assertSuccessful();
    }

    public function testRegistRoute() {
      $res = $this->get('/employee/regist');
      $res->assertStatus(200);
    }

    public function testConfirmRoute() {
      $this->get('/employee/confirm')->assertStatus(405);
    }

    public function testDoneRoute() {
      $this->get('/employee/done')->assertStatus(405);
    }

    public function testListRoute() {
      $this->get('/employee/list')->assertStatus(200);
    }

    public function testNotFound() {
      $this->get('/test')->assertStatus(404);
    }
}
