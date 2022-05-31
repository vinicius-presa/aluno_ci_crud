<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <title>Crud Codeigniter</title>
                
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
                
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Custodian" content="Vinicius Presa" />
        <meta http-equiv="content-language" content="pt-br">
        <meta charset="utf-8">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-light navbar-expand-sm  bg-white text-dark border-bottom border-dark" >
                <div class="col-md-12 my-2 text-center">
                    <h1>Sistema</h1>
                </div>
            </nav>
        </header>

            
        <div class="container">
        
            <?=  $this->renderSection('conteudo')  ?>
    
        </div>
        <footer class="fixed-bottom bg-white text-dark border-top border-dark row">    
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                <span class="textContat">Desenvolvido por Vinicius Presa</span>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                <div class="container-fluid">
                    <div class="text-center">
                        <a href="mailto:viniciuspre@gmail.com">
                            <span class="textIcon">
                                <i class="fa fa-envelope-square fa-1x m-1" aria-hidden="true"></i>
                            </span>
                            <span class="textContat">viniciuspre@gmail.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
      
        <script src="<?= base_url('assets/jquery-3.3.1.slim.min.js') ?>"></script>
        <script src="<?= base_url('assets/popper.min.js') ?>"></script>
        <script src="<?= base_url('assets/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/script.js') ?>"></script>
        
    </body>
</html>