<?= form_open(base_url().'usuario/cadastrar');?>

<?= form_fieldset('Cadastro');?>

<?= form_label("Usuario", "usuario");?>
<?= form_input(array(
    "name" => "usuario",
    "id" => "usuario",
));?>
<?= form_label("Senha", "senha");?>
<?= form_password(array(
    "name" => "senha",
    "id" => "senha",
));?>
<?= form_button(array(
    "class" => "btn_submit",
    "type" => "submit",
    "content" => "Cadastrar"
));?>

<?= form_fieldset_close()?>
<?= form_close();?>