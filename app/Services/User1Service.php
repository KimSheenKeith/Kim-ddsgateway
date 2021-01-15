<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{

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
    $this->secret =config('services.users1.secret');
 }
 
 public function obtainUsers1()
 {
 return $this->performRequest('GET','/users');
 }

 public function delete($id)
 {
 return $this->performRequest('DELETE', "/users/{$id}");
 }

 


}