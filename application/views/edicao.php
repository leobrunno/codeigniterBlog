<h1>Edição</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?=form_open('home/atualizar')?>
    <input type="hidden" name="id" value="<?=$postagens['id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="titulo" value="<?=$postagens['titulo']?>"/></td>
        </tr>
        <tr>
            <td>Conteúdo</td>
            <td><input type="text" name="conteudo" value="<?=$postagens['conteudo']?>"/></td>
        </tr>
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('home/index','Voltar')?>