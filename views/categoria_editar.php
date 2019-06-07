<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Editar Categoria</h5>
                                    <span>
                                    <?php
                                    if(!empty($aviso)){
                                            echo $aviso;
                                        }
                                    ?>
                                    </span>
                                <div class="card-body">
                                    <form id="validationform" method="post" action="<?=BASE_URL?>categoria/atualizar">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Id</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input data-parsley-type="number" value="<?=$categoriaEdit['id']?>" name="id" type="text" required="Id requirido" placeholder="ID" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Descrição</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" value="<?=$categoriaEdit['descricao']?>" name="descricao" required="Favor preencher a descrição." data-parsley-maxlength="255" placeholder="Descrição categoria" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Alterar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-footer bg-white">
                                        <p>Deseja voltar? <a href="<?=BASE_URL?>categoria/" class="text-secondary">Voltar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>