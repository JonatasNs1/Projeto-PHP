<?php

require_once("vendor/autoload.php");
<<<<<<< HEAD
require_once("../controles/exibirProdutos.php");

$app = new \Slim\App();



$app->get('/produtos', function($request, $response, $args){


    if(isset( $request ->getQueryParams()['nome'])) 
    {

      
        $nome = (string) null;
        $nome= $request ->getQueryParams()['nome']; 

        if($listDados = buscarProdutos($nome)){
            
            if( $listDadosArray = criarArray($nome)){  
                $listDadosJSON = criarJSON($listDadosArray);
                 }
        }
    }else{
        if($listarDados = exibirProdutos()){
            // var_dump($listarDados);
            // die;
            if($listarArray = criarArray($listarDados) ){
                $listarJSON = criarJSON($listarArray);
              
        }
        }
    
        
    
        if($listarArray){
            return $response   ->withStatus(200) 
            ->withHeader('Content-Type', 'application/json') 
            ->write($listarJSON);
        }else{
            return $response   ->withStatus(204);
        }
    }
   
  
    
});






$app->run();


=======
  
    $app = new \Slim\App();



    $app->get('/produtos', function($request, $response, $args){
        return $response   ->withStatus(200) 
        ->withHeader('Content-Type', 'application/json') 
        ->write('{"message":"blablablabla"}');
        
    });

    $app->run();
>>>>>>> f62609ee7497847682b8fe3a88a086e78dcedf26

?>