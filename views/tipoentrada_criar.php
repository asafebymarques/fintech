<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Criar Tipo de entrada</h5>
                                <span>
                                    <?php
                                    if(!empty($aviso)){
                                            echo $aviso;
                                        }
                                    ?>
                                    </span>
                                <div class="card-body">
                                    <form id="validationform" method="post" action="<?=BASE_URL?>tipoentrada/criacao">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Descrição</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="descricao" required="Favor preencher a descrição." data-parsley-maxlength="255" placeholder="Descrição do tipo de entrada" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Cadastrar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-footer bg-white">
                                        <p>Deseja voltar? <a href="<?=BASE_URL?>tipoentrada/" class="text-secondary">Voltar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>