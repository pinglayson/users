<?php namespace Pinglayson;
  
class Users{

  public function __construct(){

  }

  public function index(){
    return 'Hello World';
  }

  /**
   * Login via email and password
   *
   * @param $credentials array['email'=>'email@email.com', password => 'secret' ,'source' => 'web|mobile', locale=>'en|zh']
   */
  public function login($credentials){
    var_dump($credentials);
  }
}