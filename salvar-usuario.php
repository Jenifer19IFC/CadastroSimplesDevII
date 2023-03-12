<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nas = $_POST["data_nas"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nas) VALUES ('{$nome}','{$email}','{$senha}','{$data_nas}' )";

            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Dados cadastrados com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nas = $_POST["data_nas"];

            $sql = "UPDATE usuarios SET nome='{$nome}',email='{$email}',senha='{$senha}',data_nas='{$data_nas}'
            WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Dados editados com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if (!$res) {
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Dados excluídos com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

        break;
}

?>
