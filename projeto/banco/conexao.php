<?php

  $maquina = "127.0.0.1";
  $usuario = "root";
  $senha = "";
  $banco = "db_3infob";

  //cria uma conexão com o banco de dados no mysql
  $conexao = new mysqli($maquina, 
                        $usuario, $senha,  $banco);
  
  //verifica se houve erros na conexão
  if($conexao->connect_error){
      echo $conexao->connect_error;
     die(); 
  }

