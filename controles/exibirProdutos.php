<?php

// require_once('../configuracoes/config.php');
require_once(SRCP. 'bd/listarProdutos.php');



function exibirProdutos()
{
   $dados = listar();
    return $dados;
}


function buscarProdutos($nome)
{
   $dados = buscarNome($nome);
    return $dados;
    
}

function buscarIdProdutos($id){
    $dados = buscaId($id);
    return $dados;
}



function criarArray($objeto)
{
    $cont = (int) 0;

    
    while($rsDados = mysqli_fetch_assoc($objeto))
    {
        
        $arrayDados[$cont] = array( 
            "id" => $rsDados['idProdutos'],
            "nome" => $rsDados['nome'],
            "valor" => $rsDados['valor'],
            "promocao" => $rsDados['promocao'],
            "descricao" => $rsDados['descricao'],
            "foto" => $rsDados['foto'],
            "destaques" => $rsDados['destaques'],
            "idcategorias" => $rsDados['idcategorias']
        );

        $cont +=1; 
    }
 
    if(isset($arrayDados)){
        return $arrayDados;
    }else{
        return false;
    }
}


function criarJSON($arrayDados)
{
    
    header("content-type:application/json");

    $listarJSON = json_encode($arrayDados); 


    if(isset($listarJSON)){
        return $listarJSON;
     }else{
         return false;
    }
}



?>