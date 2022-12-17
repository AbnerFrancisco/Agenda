<h2>Cadastrar Tarefa</h2>
<div>
    <form action="index.php?menuop=inserir-tarefa" method="post">
        <div class="mb-3">
            <label class="form-label" for="tituloTarefa">Título</label>
            <input class="form-control" type="text" name="tituloTarefa" id="tituloTarefa">
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoTarefa">Descrição</label>
            <textarea class="form-control" name="descricaoTarefa" id="descricaoTarefa" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3 col-2">
            <label class="form-label" for="dataInicioTarefa">Date de início</label>
            <input class="form-control" type="date" name="dataInicioTarefa" id="dataInicioTarefa">
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </div>
    </form>
</div>