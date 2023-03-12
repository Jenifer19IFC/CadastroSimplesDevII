<?php
  
  $host = "localhost";
  $user = "root"; 
  $password = ""; 
  $base = "cadastro";
  
  //Criação do objeto MySQLi passando os parâmetros de conexão
  $conn = new mysqli($host, $user, $password, $base);
  
  //Verifica se houve erro na conexão
  if ($conn->connect_error) {
      die("Falha na conexão: " . $conn->connect_error);
  }
  //echo "Conexão bem-sucedida!<br>"; 

