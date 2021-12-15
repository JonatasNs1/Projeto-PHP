<?php

require_once('../functions/config.php');

//import do arquivo que vai inserir no BD
require_once(SRC.'bd/inserirProdutos.php');
require_once(SRC.'bd/uploadProdutos.php');


function inserirProdutosAPI($arrayDados) 
{

    if(inserir($arrayDados)){ 
        return true;
    }else{
        return false;
    }
       
    

}






?>