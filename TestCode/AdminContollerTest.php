<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use \App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chef;

class AdminContollerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user() {
        $this->data = new AdminController;
        $response = $this->data->user();
        $data = user::all();
        $this->assertEquals($response , view("admin.user", compact('data')));
    }
    public function test_deleteuser() {
        $this->data = new AdminController;
        $id = user::where('current_team_id', '0')->inRandomOrder()->limit(1)->get();
        $response = $this->data->deleteuser($id[0]->id);
        $this->assertTrue(true);
    }
    public function test_foodmenu() {
        $this->data = new AdminController;
        $response = $this->data->foodmenu();
        $data = food::all();
        $this->assertEquals($response , view("admin.foodmenu", compact("data")));
    }
    public function test_upload() {
        $this->data = new AdminController;
        $request = new Request(['title' => 'Food Title',
        'price' => '20 tk',
        'description' => 'Description',
        'image' => NULL,]);
        $response = $this->data->upload($request);
        $this->assertTrue(true);
    }
     public function test_deletemenu() {
            $this->data = new AdminController;
            $id = food::where('title', 'Food Title')->inRandomOrder()->limit(1)->get();
            $response = $this->data->deletemenu($id[0]->id);
            $this->assertTrue(true);
        }

    public function test_updateview() {
        $this->data = new AdminController;
        $response = $this->data->updateview(2);
        $data = food::find(2);
        $this->assertEquals($response , view("admin.updateview", compact("data")));
    }
    public function test_update() {
        $this->data = new AdminController;
        $request = new Request(['title' => 'Sample',
        'price' => '20 tk',
        'description' => 'Sample Description',
        'image' => NULL,]);
        $id = food::where('title', 'Black Coffee')->inRandomOrder()->limit(1)->get();
        $response = $this->data->update($request, $id[0]->id);
        $this->assertTrue(true);
    }
    public function test_reservation() {
        $this->data = new AdminController;
        $request = new Request(['name' => 'Customer1',
        'email' => 'customer1@gmail.com',
        'phone' => '0111119888',
        'chef' => 'Abir','guest' => '20','date' => '25.05.2022','time' => '10:00','message' => 'Make reservation',]);
        $response = $this->data->reservation($request);
        $this->assertTrue(true);
    }
    public function test_viewreservation() {
        $this->data = new AdminController;
        $response = $this->data->viewreservation();
        $data = reservation::all();
        $this->assertEquals($response , view("admin.adminreservation", compact("data")));
    }
    public function test_viewchef() {
        $this->data = new AdminController;
        $response = $this->data->viewchef();
        $data = chef::all();
        $this->assertEquals($response , view("admin.adminchef", compact("data")));
    }
    public function test_uploadchef() {
        $this->data = new AdminController;
        $request = new Request(['name' => 'Sample',
        'speciality' => 'nothing',
        'email' => 'sample@gmail.com',
        'ratings' => '3','image'=>NULL]);
        $response = $this->data->uploadchef($request);
        $this->assertTrue(true);
    }
    public function test_updatechef() {
        $this->data = new AdminController;
        $response = $this->data->updatechef(2);
        $data = chef::find(2);
        $this->assertEquals($response , view("admin.updatechef", compact("data")));
    }
       public function test_updatefoodchef() {
        $this->data = new AdminController;
        $request = new Request(['name' => 'Sample',
        'speciality' => 'nothing',
        'email' => 'sample@gmail.com',
        'ratings' => '3','image'=>NULL,]);
        $id = chef::where('name', 'Abir')->inRandomOrder()->limit(1)->get();
        $response = $this->data->updatefoodchef($request, $id[0]->id);
        $this->assertTrue(true);
    }
       public function test_deletefoodchef() {
            $this->data = new AdminController;
            $id = chef::where('name', 'Sample')->inRandomOrder()->limit(1)->get();
            $response = $this->data->deletefoodchef($id[0]->id);
            $this->assertTrue(true);
        }

}
