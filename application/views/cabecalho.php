<html>
    <div id = "cabecalho">
    <link href = "http://localhost/codeigniterBlog/assets/css/estilo.css" rel = "stylesheet"/>
        <h2>Blog do fulano de tal</h2>
        
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <h2><?=$this->session->flashdata('error')?></h2>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <h2><?=$this->session->flashdata('success')?></h2>
        <?php endif; ?>

        <div id = "formbusca">
            <div id = "formbusca">
                <?= form_open(base_url().'home/buscar'); ?>
                <?= form_label("Buscar", "busca"); ?>
                <?php $data = array('name' => 'busca', 'id' => 'busca', 'class' => 'form-control mr-sm-2'); ?>
                <?= form_input($data); ?>
                <?= form_submit('btn btn-outline-success my-2 my-sm-0', 'Buscar'); ?>
                <?= form_close(); ?>
            </div>
        </div>
        <div>
            <?= anchor('usuario/logout', 'Sair');?>
        </div>
    </div>
    <br class = 'clear-both'>
</html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>