
<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>


<?php if($count == 0 ){?>
    <div class="alert alert-warning" role="alert">
        Nenhum Aluno Cadastrado 
    </div>
<?php }else{ ?>
<table class="table">
  <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
        
    </tr>
  </thead>
  <tbody>
    <?php foreach($result as $cliente) : ?> 
    <tr>
    <td>   <img src='data:image/jpg;base64,<?= $cliente->img ?>' width="65" height="50">  </td>
                
                <td> <?php echo $cliente->nome ?></td>
                <td><?php echo $cliente->endereco ?></td>
                
            <th>
                <a href=" <?=  base_url('clientes/dados/'.$cliente->id )  ?> " >   
                    <button type="button" class="btn btn-success">Vizualiar</button>
                </a>    
            </th>
            <th>
                <a href=" <?=  base_url('clientes/alterar/'.$cliente->id )  ?> " >   
                    <button type="button" class="btn btn-warning">Editar</button>
                </a>    
            </th>
            <th>
                <a href=" <?=  base_url('clientes/excluir/'.$cliente->id )  ?> " >   
                    <button type="button" class="btn btn-danger">Excluir</button>
                </a>    
            </th>
            
        </tr>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<?php } ?>
<div class="card-footer d-flex justify-content-end">
    
    <a href="javascript:history.back()">
        <button type="button" class="btn btn-outline-info">Voltar </button>
    </a>
</div>

<?=  $this->endSection() ?>