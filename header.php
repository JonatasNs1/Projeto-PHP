<?php
//Ativa a utilização de variaveis de sessão 
//session_status() retorna se a sessão ja foi iniciada
//PHP_SESSION_ACTIVE - VALIDA SE JÁ ESTA NA MEMÓRIA DO STATUS DE ATIVO
if(session_status() != PHP_SESSION_ACTIVE)
session_start();
    if(!isset($_SESSION['statusLogin']) || !$_SESSION['statusLogin']){
        header('location:index.php');
    }
    

?>





<!DOCTYPE html>


<html>
    <head>
        <link rel="stylesheet" href="css/dash.css">
        
    </head>
    <body>
     <header>
            
        <div id="cabecalho">
            <div class="conteudo">
                <div id="conteudoCabecalho">
                    <div> <h1>CMS </h1></div>
                    <div> <h2>Burger eatS </h2> </div>
                    <div><p>Gerenciamento de conteudos do site</p></div>

                </div>

                <div class="imgCabecalho">
                      <img src="img/logo.png" class="imagemCabecalho">

                </div>
            </div>
        </div>

        <div id="campoCategorias">
             <div class="conteudo">
                    <div>
                        <div class="categorias">
                            
                            <div class="imgCategorias">
                                <a href="indexProdutos.php"> <img src="img/adm.png" class="imagemCategorias"> </a> 
                            </div>
                            <div class="subtituloCategorias"><h3>Adm. Produtos</h3> </div>    
                        </div>
        
                        <div class="categorias">
                            <div class="imgCategorias">
                               <a href="indexCategorias.php"> <img src="img/categorias.png" class="imagemCategorias"></a>
                            </div>
                            <div class="subtituloCategorias"><h3>Adm. Categorias</h3> </div>    
                        </div>
        
                        <div class="categorias">
                            <div class="imgCategorias"> 
                                <a href="indexContatos.php"><img src="img/contatos.png" class="imagemCategorias"> </a> 
                            </div>
                            <div class="subtituloCategorias"><h3>Contatos</h3> </div>    
                        </div>
        
                        <div class="categorias">
                            <div class="imgCategorias"> 
                           <a href="indexUsuarios.php">  <img src="img/usuarios.png" class="imagemCategorias"></a>
                            </div>
                            <div class="subtituloCategorias"><h3>Usuários</h3> </div>    
                        </div>

                    </div>


                    <div>
                        <div id="bemVindo">
                            <div id="tituloBemVindo">
                                <h4> <span>Bem Vindo </span> <?=$_SESSION['nomeUsuario'];?></h4>
                            </div>
                            <div id="layoutBemVindo">
                              <a href="indexHamburg.php"><img src="img/logout.png" class="imagemCategorias"> </a> 
                               
                            </div>
                            <div>
                                <h3>Logout</h3>     

                            </div>
                        </div>

                    </div>
            </div>
        </div>

        
      

        </header>
     
    </body>

</html>