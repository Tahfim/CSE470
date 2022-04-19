<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use \App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Food;
use App\Models\Chef;

class HomeControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index() {
        $this->data = new HomeController;
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    public function test_redirects() {
        $this->data = new HomeController;
        $response = $this->data->redirects();
        $this->assertTrue(true);
    }
}
