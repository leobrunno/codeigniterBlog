<div id = "conteudo">
<link href = "http://localhost/codeigniter/assets/css/estilo.css" rel = "stylesheet"/>
    <h2> Conteudo das postagens </h2>
    <div id = 'grid-home'>
        <?php foreach($postagens as $posts):?>
            <div class = 'item-grid-home'>
                <h2>
                    <?= $posts['titulo']; ?>
                </h2>
                <h3>
                    <?= $posts['conteudo']; ?>
                </h3>
                <h3>
                    <?=anchor('home/editar/'.$posts['id'],'Editar')."</br>"?>
                    <?=anchor('home/excluir/'.$posts['id'],'Excluir')?>
                </h3>
            </div>
        <?php endforeach;?>
    </div>
</div>