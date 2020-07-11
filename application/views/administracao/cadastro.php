<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
     <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
</head>

<body>
    <div class= "container">
        <form action="<?=base_url()?>usuario/cadastrar" class="form-signin" method = "post">

            <h2 class="form-signin-heading">Bem vindo ao cadastro do blog</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name = "usuario" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastre-se</button>
            
        </form>
    </div>

</body>
</html>