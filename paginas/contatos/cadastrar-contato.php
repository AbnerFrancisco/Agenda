<h2>Cadastrar Contato</h2>
<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <div class="mb-3 col-md-6">
            <label class="form-label" for="nomeContato">Nome</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-person-circle"></i></div>
                <input class="form-control" type="text" name="nomeContato" id="nomeContato">
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <div class="input-group-text" id="btnGroupAddon">@</div>
                <input class="form-control" type="email" name="emailContato" id="emailContato">
            </div>
            
        </div>
        <div class="row">
        <div class="mb-3 col-md-2">
            <label class="form-label" for="telefoneContato">Telefone</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-telephone-forward-fill"></i></div>
                <input class="form-control" type="text" name="telefoneContato" id="telefoneContato">
            </div>
        </div>
        <div class="mb-3 col-md-2">
            <label class="form-label" for="dataNascContato">Data de Nascimento</label>
            <div class="input-group">
                <div class="input-group-text"><i class="bi bi-calendar-week-fill"></i></div>
                <input class="form-control" type="date" name="dataNascContato" id="dataNascContato">
            </div>
        </div>
        </div>
        <div>
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </div>
    </form>
</div>