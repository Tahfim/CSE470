<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class WebTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_redirects() {
        $response = $this->get('/redirects');
        $response->assertStatus(500);
    }
    public function test_deletemenu() {
        $response = $this->get('/deletemenu/{id}');
        $response->assertStatus(500);
    }
    public function test_users() {
        $response = $this->get('/users');
        $response->assertStatus(500);
    }
    public function test_updateview() {
        $response = $this->get('/updateview/{id}');
        $response->assertStatus(500);
    }
    public function test_update() {
        $response = $this->post('/update/{id}');
        $response->assertStatus(500);
    }
    public function test_uploadfood() {
        $response = $this->post('/uploadfood');
        $response->assertStatus(302);
    }
    public function test_foodmenu() {
        $response = $this->get('/foodmenu');
        $response->assertStatus(500);
}
    public function test_deleteuser() {
        $response = $this->get('/deleteuser/{id}');
        $response->assertStatus(500);
}
public function test_reservation() {
    $response = $this->post('/reservation');
    $response->assertStatus(302);
}
public function test_uploadchef() {
    $response = $this->post('/uploadchef');
    $response->assertStatus(500);
}
public function test_viewreservation() {
    $response = $this->get('/viewreservation');
    $response->assertStatus(500);
}
public function test_viewchef() {
    $response = $this->get('/viewchef');
    $response->assertStatus(500);
}
public function test_updatechef() {
    $response = $this->get('/updatechef/{id}');
    $response->assertStatus(500);
}
public function test_updatefoodchef() {
    $response = $this->post('/updatefoodchef/{id}');
    $response->assertStatus(500);
}
public function test_deletechef() {
    $response = $this->get('/deletechef/{id}');
    $response->assertStatus(500);
}

}
