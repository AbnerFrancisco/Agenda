<h2>Editar Tarefa</h2>

<?php
$codigoTarefa = $_GET["codigoTarefa"];
$sql = "SELECT 
codigoTarefa,
tituloTarefa,
descricaoTarefa,
dataInicioTarefa,
dataConclusaoTarefa,
statusTarefa 
FROM tbtarefas 
WHERE codigoTarefa =  '{$codigoTarefa}'";
$rs = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($rs);

?>
<div>
    <form action="index.php?menuop=atualizar-tarefa" method="post">
        <div class="mb-3 col-md-2">
            <label class="form-label" for="codigoTarefa">Código</label>
            <input class="form-control" type="text" name="codigoTarefa" id="codigoTarefa" value="<?=$dados["codigoTarefa"]?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="tituloTarefa">Título</label>
            <input class="form-control" type="text" name="tituloTarefa" id="tituloTarefa" value="<?=$dados["tituloTarefa"]?>">
        </div>
        <div class="mb-3">
            <label class="form-label" for="descricaoTarefa">Descrição</label>
            <textarea class="form-control" name="descricaoTarefa" id="descricaoTarefa" cols="30" rows="10"><?=$dados["descricaoTarefa"]?></textarea>
        </div>
    <div class="row">
            <div class="mb-3 col-md-2">
                    <label class="form-label" for="dataInicioTarefa">Date de início</label>
                    <input class="form-control" type="date" name="dataInicioTarefa" id="dataInicioTarefa"  value="<?=$dados["dataInicioTarefa"]?>">
                </div>
                <div class="mb-3 col-md-2">
                    <label class="form-label" for="dataConclusaoTarefa">Date de conclusão</label>
                    <input class="form-control" type="date" name="dataConclusaoTarefa" id="dataConclusaoTarefa" value="<?=$dados["dataConclusaoTarefa"]?>">
                </div>
    </div>


        <div class="mb-3">
            <label class="form-label" for="statusTarefa">Status</label>
            <select class="form-select" name="statusTarefa" id="statusTarefa">
                <option <?php echo ($dados["statusTarefa"] == "N")?"selected":""  ?> value="N">Não Concluido</option>
                <option <?php echo ($dados["statusTarefa"] == "S")?"selected":""  ?>  value="S">Concluido</option>
            </select>
        </div>
        <div>
            
            <button class="btn btn-success" type="submit">
                <i class="bi bi-arrow-clockwise"></i> 
                Atualizar
            </button>
        </div>
    </form>
</div>