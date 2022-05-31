<?= $this->extend('layouts/main_layout') ?>

<?= $this->section('conteudo') ?>

    <div class="row">
        <div class="offset-md-4 offset-lg-4 offset-xl-4 col-sm-12 col-md-4 col-lg-4 col-xl-4 form-div">
                <input type="hidden" id="id" name="id" value="<?= isset($result->id) ? $result->id : set_value('id') ?>">
                <h3 class="text-center">Alunos</h3>
                <div class="form-group text-center" >
                    <?php if( isset($result->img) ){   ?>
                        <abbr title="Clique para inserir uma imagem"><img src='data:image/jpg;base64, <?= $result->img ?>' onclick="acionarClick()" id="profileDisplay" width="200" height="200" /> </abbr>
                        <input type="file" name="img" onchange="displayImage(this)" id="profileImage" class="form-control" style="display: none">
                    <?php }else{   ?>
                        <abbr title="Clique para inserir uma imagem"><img src="<?= base_url('img/placeholder.jpg')?>" onclick="acionarClick()" id="profileDisplay" width="200" height="200" /> </abbr>  
                        <input type="file" required="" name="img" onchange="displayImage(this)" id="profileImage" class="form-control" style="display: none">
                    <?php } ?>
                    
                </div>
                <div class="form-group">
                    <label for="name" >Nome</label>
                    <input type="text" value="<?= isset($result->nome) ? $result->nome : set_value('nome') ?>" name="nome" required="" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="endereco" >Endereço</label>
                    <input type="text" value="<?= isset($result->endereco) ? $result->endereco : set_value('endereco') ?>" name="endereco" required="" id="endereco" class="form-control">
                </div>
                <div class="form-group">
                        <button type="submit" name="btn" class="btn btn-primary btn-block">Enviar</button>
                    <a href="<?=  base_url('clientes') ?>">
                        <button type="button" class="btn btn-block">Voltar </button>
                    </a>   
                </div>
                        
            </form>
        </div>   
    </div>    

<?=  $this->endSection() ?>