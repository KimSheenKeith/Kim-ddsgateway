<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2Service{
 use ConsumesExternalService;
 /**
 * The base uri to consume the User1 Service
 * @var string
 */
 public $baseUri;
 public $secret;
 public function __construct()
 {
    $this->baseUri = config('services.users1.base_uri');
    $this->secret =config('services.users2.secret');
 }

 public function obtainUsers2(){
 return $this->performRequest('GET','/users');
 }

 /**
 * Create one user using the User1 service
 * @return string
 */
public function createUser2($data){

    return $this->performRequest('POST', '/users',$data);
}

public function obtainUser2($id)
{
    return $this->performRequest('GET', "/users/{$id}");
}

public function editUser2($data, $id){
 
    return $this->performRequest('PUT',"/users/update/{$id}", $data);
 }


 public function deleteUser2($id){
    
    return $this->performRequest('DELETE', "/users/delete/{$id}");
 }

}
