<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

<div class="alert alert-dark" role="alert">
    <h4 class="alert-heading">Bem Vindo!</h4>
    <p> Sistema para cadastro e edição de Alunos.</p>
    <hr>
    <p class="mb-0">Desenvolvido em PHP com CodeIgniter e Bootstrap.</p>
</div>
<div class="col col-lg-12 text-center">
    
    <a href=" <?=  base_url('clientes')  ?> ">
        <button type="button" class="btn btn-outline-dark">Entrar</button>
    </a>
</div>

<?=  $this->endSection() ?>