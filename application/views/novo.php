<h1>Nova Postagem</h1>

<?=form_open('home/salvar')?>
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="titulo"/></td>
        </tr>
        <tr>
            <td>Conteúdo</td>
            <td><input type="text" name="conteudo"/></td>
        </tr>
    </table>
    <input type="submit" value="Salvar"/>
<?=form_close()?>
<?=anchor('home/index','Voltar')?>