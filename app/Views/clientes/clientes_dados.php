
<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>


<div class="col col-lg-12 text-center">

<div style="display:<?= isset($display) ? $display : '' ?>" class="alert alert-success" role="alert">
  <?= isset($msg) ? $msg : '' ?>
</div>


<img src='data:image/jpg;base64, <?= $result->img ?> ' width="200" height="200">
</div>


<ul class="list-group list-group-horizontal">
  <li class="list-group-item list-group-item-ligh text-center"><?= $result->nome ?></li>
  <li class="list-group-item list-group-item-ligh text-center"><?= $result->endereco ?></li>
</ul>


<div class="card-footer d-flex justify-content-end">
    <a href="<?=  base_url('clientes') ?>">
        <button type="button" class="btn btn-outline-info">Voltar </button>
    </a>
</div>


<?=  $this->endSection() ?>