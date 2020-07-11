<div id = "conteudo">
<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/3.3/examples/jumbotron/jumbotron.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>
<div class="container">
      <!-- Example row of columns -->
      <div class="row">
	  <?php foreach ($postagens as $post):?>
        <div class="col-md-4">
          <h2><?= $post['titulo'];?></h2>
          <p><?= $post['conteudo'];?> </p>
          <?=anchor('home/editar/'.$post['id'],'Editar')."</br>"?>
          <?=anchor('home/excluir/'.$post['id'],'Excluir')?>
        </div>
		<?php endforeach;?>
    </div>
</div>