
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="email">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="numero" class="numero">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="senha">
    </div>
    <div class="mb-3">
       <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>
