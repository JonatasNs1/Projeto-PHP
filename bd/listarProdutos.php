<?php


require_once(SRCP.'bd/conexao.php');

function listar(){
    // $sql = "select *from  tblProdutos";

    $sql = "select tblProdutos.idProdutos,tblProdutos.nome,tblProdutos.valor,tblProdutos.descricao,tblProdutos.foto,tblProdutos.promocao, tblcategorias.categoria from tblProdutos
	inner join tblCategorias
    on tblCategorias.idcategorias = tblProdutos.idcategorias ";

//     $sql = "select tblProdutos.nome,tblProdutos.valor, tblEstado.sigla
//     from tblcliente
//      inner join tblEstado
//      on tblEstado.idEstado = tblcliente.idEstado
//  order by idcliente desc";





    $conexao = conexaoMysql();
    $select = mysqli_query($conexao, $sql);
    // echo($sql);
    // die;
    // if( )){
    //     // echo('foi a listagem');
    // }else{
    //     echo('Não foi a listagem');
    // }
    
    return $select;
}

function busca($idProdutos){
   
    $sql = "select tblProdutos.*, tblcategorias.categoria from tblProdutos
	inner join tblCategorias
    on tblCategorias.idcategorias = tblProdutos.idcategorias
    where tblProdutos.idProdutos = ".$idProdutos;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

?>