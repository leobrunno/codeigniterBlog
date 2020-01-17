<div id = "conteudo">
<link href = "http://localhost/codeigniter/assets/css/estilo.css" rel = "stylesheet"/>

    <div id = 'grid-home'>
    <h2 class = 'num_resultados'> Sua busca por: <span class = 'blue'><?php echo $busca;?></span>, encontrou <?php echo count($postagens) ?> resultados</h2>
        <?php foreach($postagens as $posts):?>
            <div class = 'item-grid-home'>
                <h2>
                    <?= $posts['titulo']; ?>
                </h2>
                <h3>
                    <?= $posts['conteudo']; ?>
                </h3>
            </div>
        <?php endforeach;?>
    </div>
</div>
    