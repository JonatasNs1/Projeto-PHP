<?php



require_once(SRC.'bd/conexao.php');

function listarCategorias(){

    $sql = "select * from  tblcategorias";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao, $sql);

    // if( $select = mysqli_query($conexao, $sql)){
    //     echo('selecao feita com sucesso');
    // }else{
    //     echo('erro');
    // }

    return $select;
}


function buscaCategorias($idcategoria){
   
    $sql = "select * from tblcategorias
     where idcategorias = ".$idcategoria;

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}

function buscaIdCategorias($id){

    $sql = "select tblProdutos.*, tblcategorias.categoria from tblProdutos
	inner join tblcategorias
    on tblcategorias.idcategorias = tblProdutos.idcategorias
    where tblcategorias.idcategorias like '%".$id."%'";

    $conexao = conexaoMysql();

    $select = mysqli_query($conexao,$sql);

    return $select;
}



        

?>