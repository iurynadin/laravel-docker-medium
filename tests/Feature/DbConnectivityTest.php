<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DbConnectivityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDbConnectivity()
    {
        $db = $this->app->make("db");
        $row = $db->selectOne("SELECT 1 AS one");
        $this->assertEquals(1, $row->one);
    }
}
