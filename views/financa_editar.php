<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Editar Receita / Despesa</h5>
                                <span>
                                    <?php
                                    if(!empty($aviso)){
                                            echo $aviso;
                                        }
                                    ?>
                                    </span>
                                <div class="card-body">
                                    <form id="validationform" method="POST" action="<?=BASE_URL?>financa/atualizar">
                                        <div class="form-group">
                                            <label class="inputText3">Id</label>
                                            <input data-parsley-type="number" value="<?=$financaEdit['id']?>" name="id" type="text" placeholder="ID" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                                <label for="input-select">Tipo</label>
                                                <select class="form-control" id="input-select" name="tipoentrada">
                                                <?php foreach($tipoentradaArray as $tipoentradaEntity):?>
                                                    <option value="<?=$tipoentradaEntity['id']?>" <?php echo ($tipoentradaEntity['id'] == $financaEdit['tipoentradafk']) ? ' selected ' : ''; ?>><?=$tipoentradaEntity['descricao']?></option>
                                                <?php endforeach;?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Descrição</label>
                                                <input id="inputText3" type="text" name="descricao" value="<?=$financaEdit['descricao']?>" required="Favor preencher a descrição." data-parsley-maxlength="255" placeholder="Descrição da finança" class="form-control">
                                        </div>
                                        <div class="form-group">
                                                <label for="input-select">Categoria</label>
                                                <select class="form-control" id="input-select" name="categoria">
                                                <?php foreach($categoriaArray as $categoriaEntity):?>
                                                    <option value="<?=$categoriaEntity['id']?>" <?php echo ($categoriaEntity['id'] == $financaEdit['categoriafk']) ? ' selected ' : ''; ?>><?=$categoriaEntity['descricao']?></option>
                                                <?php endforeach;?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dia de débito <small class="text-muted">yyyy/mm/dd</small></label>
                                            <input type="text" value="<?=$financaEdit['data_debito']?>" class="form-control date-inputmask" id="date-mask" placeholder="yyyy/mm/dd" name="data_debito">
                                        </div>
                                        <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                                <input type="text" class="form-control" value="<?=$financaEdit['valor']?>" name="valor">
                                                <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                            </div>
                                        <div class="form-group row">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Alterar</button> </div>
                                        </div>
                                    </form>
                                    <div class="card-footer bg-white">
                                        <p>Deseja voltar? <a href="<?=BASE_URL?>financa/" class="text-secondary">Voltar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>