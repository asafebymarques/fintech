<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
        <h5 class="card-header">Categoria</h5>
        <div class="card-body">
            <a class="btn btn-space btn-primary" href="<?=BASE_URL?>categoria/criar"><font color="white">Criar nova categoria</font></a>
            <div class="table-responsive ">
                 <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Id</th>
                             <th scope="col">Descrição</th>
                             <th scope="col">Status</th>
                             <th scope="col">Ações</th>
                         </tr>
                     </thead>
                    <tbody>
                         <?php foreach($categoriaArray as $categoriaEntity):?>
                        <tr>
                             <th scope="row"><?=$categoriaEntity['id']?></th>
                             <td><?=$categoriaEntity['descricao']?></td>
                             <td><?=$categoriaEntity['status']?></td>
                             <td><a href="<?=BASE_URL?>categoria/editar?id=<?=$categoriaEntity['id']?>"><span><i class="fa fa-paint-brush" aria-hidden="true"></i></span></a></br><a href="<?=BASE_URL?>categoria/excluir?id=<?=$categoriaEntity['id']?>"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                         </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
             </div>
        </div>
     </div>
 </div>