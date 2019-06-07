<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
        <h5 class="card-header">Tipo de Entrada</h5>
        <div class="card-body">
            <a class="btn btn-space btn-primary" href="<?=BASE_URL?>tipoentrada/criar"><font color="white">Criar nova categoria</font></a>
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
                         <?php foreach($tipoentradaArray as $tipoentradaEntity):?>
                        <tr>
                             <th scope="row"><?=$tipoentradaEntity['id']?></th>
                             <td><?=$tipoentradaEntity['descricao']?></td>
                             <td><?=$tipoentradaEntity['status']?></td>
                             <td><a href="<?=BASE_URL?>tipoentrada/editar?id=<?=$tipoentradaEntity['id']?>"><span><i class="fa fa-paint-brush" aria-hidden="true"></i></span></a></br><a href="<?=BASE_URL?>tipoentrada/excluir?id=<?=$tipoentradaEntity['id']?>"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                         </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
             </div>
        </div>
     </div>
 </div>