<h1>Novo usuário</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">  <!-- Ação vai oculta (hidden) -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de nascimento</label>
        <input type="date" name="data_nas" class="form-control">
    </div>
    <div class="mb-3">
       <button type="submit" class="btn btn-warning">Cadastrar</button>
    </div>

</form>