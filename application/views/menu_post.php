<div id = "menu_de_post">
<link href = "http://localhost/codeigniterBlog/assets/css/estilo.css" rel = "stylesheet"/>
<h2> Menu de posts </h2>
<ul>
    <?= anchor('home/novo', 'Nova postagem');?>
    <?php foreach($postagens as $posts):?>
        <li>
            <?= 
                anchor('home/visualizar/'.$posts['id'], $posts['titulo']);
            ?>

        </li>
    <?php endforeach;?>
</ul>
</div>