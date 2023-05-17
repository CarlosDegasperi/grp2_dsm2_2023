<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Seron</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    
</head>
<body>
    <form action = "colaborador_cadastro.php" method = "post" >
       <label for="name">Nome Completo</label>
       <input type = "text" id = "name" name = "name"><br><br>
       <label for="email">Insira o seu e-mail</label>
       <input type="email" id="email" name = "email"><br><br>
       <label for="cpf">Insira o seu CPF</label>
       <input type="text" id ="cpf" name="cpf"><br><br>
       
       <label for="senha">Insira sua Senha</label><br><br>
       <input type="password" id="senha" name="senha"><br><br>
       <label for="confirmasenha">Insira sua Senha</label><br><br>
       <input type="password" id="confirmasenha" name="confirmasenha"><br><br>
       <input type = "submit" value="Enviar">

    </form>
</body>
</html>