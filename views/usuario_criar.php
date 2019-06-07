<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Criar Usuario</h5>
                                <span>
                                    <?php
                                    if(!empty($aviso)){
                                            echo $aviso;
                                        }
                                    ?>
                                    </span>
                                <div class="card-body">
                                    <form id="validationform" method="post" action="<?=BASE_URL?>usuario/criacao">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Nome Completo</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="nome" required="Favor preencher o nome." data-parsley-maxlength="255" placeholder="Nome Completo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">CPF</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" name="cpf" required="Favor preencher CPF" data-parsley-maxlength="cpf" placeholder="CPF" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">E-Mail</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="email" name="user" required="Favor preencher e-mail" data-parsley-type="email" placeholder="E-mail" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Senha</label>
                                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                                <input id="pass2" name="pass" type="password" required="Favor preencher a senha" placeholder="Senha" class="form-control">
                                            </div>
                                            <div class="col-sm-4 col-lg-3">
                                                <input type="password" required="Favor preencher a senha" data-parsley-equalto="#pass2" placeholder="Repetir senha" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Cadastrar</button>                                            </div>
                                        </div>
                                    </form>
                                    <div class="card-footer bg-white">
                                        <p>Deseja voltar? <a href="<?=BASE_URL?>usuario/" class="text-secondary">Voltar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>