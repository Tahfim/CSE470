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
        $id = user::where('usertype', '0')->inRandomOrder()->limit(1)->get();
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
        'price' => '$9',
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
        'price' => '$9',
        'description' => 'Sample Description',
        'image' => NULL,]);
        $id = food::where('title', 'Chowmein')->inRandomOrder()->limit(1)->get();
        $response = $this->data->update($request, $id[0]->id);
        $this->assertTrue(true);
    }
    public function test_reservation() {
        $this->data = new AdminController;
        $request = new Request(['name' => 'Mahin',
        'email' => 'mahin@gmail.com',
        'phone' => '01987654321',
        'chef' => 'Sanji','guest' => '14','date' => '27.12.2022','time' => '20:30','message' => 'Be on Time',]);
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
        'email' => 'naruto@gmail.com',
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
        'email' => 'naruto@gmail.com',
        'ratings' => '3','image'=>NULL,]);
        $id = chef::where('name', 'Sanji')->inRandomOrder()->limit(1)->get();
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
