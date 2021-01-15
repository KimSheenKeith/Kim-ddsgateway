<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Traits\ApiResponser;
use DB;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

       /**
 * The service to consume the User1 Microservice
 * @var User2Service
 */
 public $user2Service;
 /**
 * Create a new controller instance
 * @return void
 */
 public function __construct(User2Service $user2Service){
    $this->user2Service = $user2Service;
 }

   
    //To Show all users in the database
   public function getUsers(){
       return $this->successResponse($this->user2Service->obtainUsers2());
        
    }


    // Create a new user
    public function addUsers(Request $request){

      return $this->successResponse($this->user2Service->createUser2($request->all(), Response::HTTP_CREATED));
    }



    public function show($id){
       return $this->successResponse($this->user2Service->obtainUser2($id));
    }
    //Update existing user

    public function update(Request $request, $id){
       return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
        
    }

    // Delete existing user
    
    public function delete($id){
        
    }





}