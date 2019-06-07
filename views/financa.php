<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
     <div class="card">
        <h5 class="card-header">Receitas / Despesas</h5>
        <div class="card-body">
            <a class="btn btn-space btn-primary" href="<?=BASE_URL?>financa/criar"><font color="white">Criar nova Receita / Despesa</font></a>
            <div class="table-responsive ">
                 <table class="table">
                    <thead>
                         <tr>
                             <th scope="col">Id</th>
                             <th scope="col">Descrição</th>
                             <th scope="col">Tipo</th>
                             <th scope="col">Categoria</th>
                             <th scope="col">Data de débito</th>
                             <th scope="col">Valor</th>
                             <th scope="col">Ações</th>
                         </tr>
                     </thead>
                    <tbody>

                        <?php foreach($financaArray as $financaEntity):?>
                        <tr>
                             <th scope="row"><?=$financaEntity['id']?></th>
                             <td><?=$financaEntity['descricao']?></td>
                             <td><?=$financaEntity['tipo']?></td>
                             <td><?=$financaEntity['cat']?></td>
                             <td><?=$financaEntity['data_debito']?></td>
                             <td><?=$financaEntity['valor']?></td>
                             <td><a href="<?=BASE_URL?>financa/editar?id=<?=$financaEntity['id']?>"><span><i class="fa fa-paint-brush" aria-hidden="true"></i></span></a></br><a href="<?=BASE_URL?>financa/excluir?id=<?=$financaEntity['id']?>"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                         </tr>  
                        <?php endforeach;?>
                    </tbody>
                </table>
             </div>
        </div>
     </div>
 </div>