<?php namespace Pinglayson;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class Users{

  private $client;

  private $url = 'http://service-api.test/';

  public function __construct(){
    $this->client = new Client();
  }

  public function index(){
    return 'Hello World';
  }

/**
   * Login via email and password
   *
   * @param $credentials array['email'=>'email@email.com', password => 'secret' ,'source' => 'web|mobile', locale=>'en|zh']
   */
  public function login($parameters){
    return $this->postRequest($this->url.'api/v1/auth/login', $parameters);
  }

  protected function postRequest($uri, $parameters)
  {
    try{
      $response = $this->client->request('POST', $uri, [
          'form_params' => $parameters,
      ]);
    } catch(ClientException $e) {
      Log::debug($e);
      throw $e;
    }
    return $this->decodeResponse($response);
  }

  protected function decodeResponse($response)
  {
    if (!$response) {
        return 'Empty or Invalid Response';
    } else {
        return json_decode($response->getBody()->getContents());
    }
  }

}
