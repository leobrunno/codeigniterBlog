<div id = "conteudo">
<link href = "http://localhost/codeigniter/assets/css/estilo.css" rel = "stylesheet"/>
    <h2>Postagem</h2>
    <div id = 'grid-home'>
            <div class = 'item-grid-home'>
                <h2>
                    <?= $postagens['titulo']; ?>
                </h2>
                <h3>
                    <?= $postagens['conteudo']; ?>
                </h3>
                <h3>
                    <?=anchor('home/editar/'.$postagens['id'],'Editar')."</br>"?>
                    <?=anchor('home/excluir/'.$postagens['id'],'Excluir')?>
                </h3>
            </div>
    </div>
</div>