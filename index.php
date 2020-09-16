<?php
    
 
    
  include('./vendor/autoload.php');
use Faker\Factory;
    
  use KNPLabs\Controller\ListDinosaurs;
    
  use KNPLabs\Real\FakeProvider\FakeDinosaursProvider;
    
  use KNPLabs\Routing\NotFoundException;
    
  use KNPLabs\Routing\Router;

  $dinosaursProvider = new FakeDinosaursProvider();
    
   
    
  try {
      $router = new Router();
  } catch (RuntimeException $e) {
      echo $e->getMessage();
    
   
    
      return;
  }
    
   
    
  $router->addController('/formPHP/', new ListDinosaurs($dinosaursProvider));
    
   
    
  try {
      $router->handleRequest();
  } catch (NotFoundException $e) {
    var_dump($router);  
    echo 'Not found';
  }
