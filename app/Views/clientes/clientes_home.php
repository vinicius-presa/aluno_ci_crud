

<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>


<div class="alert alert-dark" role="alert">
    <h4 class="alert-heading">Escolha a opção desejada</h4>
    
</div>
<div class="col col-lg-12 text-center">
    <a href=" <?=  base_url('clientes/cadastro')  ?> ">
        <button type="button" class="btn btn-outline-success">Cadastrar Novo Aluno</button>
    </a>
    <a href=" <?=  base_url('clientes/listar')  ?> ">
        <button type="button" class="btn btn-outline-success">Listar Alunos </button>
    </a>
</div>

<div class="card-footer d-flex justify-content-end">
    <a href="<?=  base_url('/') ?>">
        <button type="button" class="btn btn-outline-info">Voltar </button>
    </a>
</div>


<?=  $this->endSection() ?>