<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Crie uma conta ou faça login no Seu jeito lindo. Conecte-se com amigos, comunidades e outras pessoas que 
    tenha a mesmo objetivo em comum. Compartilhe fotos e envie mensagens e obtenha atualizações.">
    <meta name="language" content="pt-br" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link href="stylelogin.css" rel="stylesheet">
    <title>Jeito Lindo - Rede Social</title>
</head>

<body>
    <div class="conteinerPrincipalHome">
        <div class="conteinerSecondary">
            <img src="img/logo-principal.png" alt="Logo">
        </div>
        <div class="conteinerTertiary">

            <section class="conteinerQuarticiario">
                <h3>BEM VINDO (A)</h3>
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                <form action="login.php" method="POST" class="conteinerQuinary" autoComplete="off">
                    <input name="usuario" id="outlined-basics" class="cadLabel" placeholder="Usuário*"
                        variant="outlined" type="text" required fullWidth />
                    <input name="senha" id="outlined-basicss" class="cadLabel" placeholder="Password*"
                        variant="outlined" type="password" required fullWidth />
                    <button id="outlined-basicss" class="cadLabelButton" placeholder="Entrar*" variant="outlined"
                        type="submit">Entrar</button>
                </form>
                <p class='font-small'>Não tem uma conta? <a href="cadastro.php" style="color:black;font-weight: 600"
                        id='sign-up-login'> Cadastre-se!</a> </p>
            </section>
        </div>
    </div>

</body>

</html>