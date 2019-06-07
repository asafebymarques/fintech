<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
        <h5 class="card-header">Usuarios</h5>
        <div class="card-body">
            <a class="btn btn-space btn-primary" href="<?=BASE_URL?>usuario/criar"><font color="white">Criar novo usuario</font></a>
            <div class="table-responsive ">
                 <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Id</th>
                             <th scope="col">Nome Completo</th>
                             <th scope="col">E-mail</th>
                             <th scope="col">CPF</th>
                             <th scope="col">Status</th>
                             <th scope="col">Ações</th>
                         </tr>
                     </thead>
                    <tbody>

                        <?php foreach($usuarioArray as $usuarioEntity):?>
                        <tr>
                             <th scope="row"><?=$usuarioEntity['id']?></th>
                             <td><?=$usuarioEntity['nome']?></td>
                             <td><?=$usuarioEntity['user']?></td>
                             <td><?=$usuarioEntity['cpf']?></td>
                             <td><?=$usuarioEntity['status']?></td>
                             <td><a href="<?=BASE_URL?>usuario/editar?id=<?=$usuarioEntity['id']?>"><span><i class="fa fa-paint-brush" aria-hidden="true"></i></span></a></br><a href="<?=BASE_URL?>usuario/excluir?id=<?=$usuarioEntity['id']?>"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                         </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
             </div>
        </div>
     </div>
 </div>