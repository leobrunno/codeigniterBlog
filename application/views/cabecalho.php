<html>
    <div id = "cabecalho">
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <h2><?=$this->session->flashdata('error')?></h2>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <h2><?=$this->session->flashdata('success')?></h2>
        <?php endif; ?>

          <a class="navbar-brand" href="<?=base_url();?>">Blog do fulano de tal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form action="<?=base_url()?>home/buscar" id="formbusca" class="navbar-form navbar-right" method="post">
            <div class="form-group">
              <input type="input" id="busca" name="busca" placeholder="buscar" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
            <?= anchor('usuario/logout', 'Sair');?>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
        <div>
            <?= anchor('usuario/logout', 'Sair');?>
        </div>
    </div>
    <br class = 'clear-both'>
</html>