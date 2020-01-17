<?= form_open(base_url().'usuario/autenticar');?>

<?= form_fieldset('Login');?>

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
    "content" => "Login"
));?>

<?php if ($this->session->flashdata('error') == TRUE): ?>
            <h2><?=$this->session->flashdata('error')?></h2>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <h2><?=$this->session->flashdata('success')?></h2>
        <?php endif; ?>

<?= anchor('usuario/cadastro', 'Cadastre-se'); ?>

<?= form_fieldset_close()?>
<?= form_close();?>




