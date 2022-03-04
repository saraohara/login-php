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
<head/>

<body>
    <div class="conteinerPrincipalHome">
        <div class="conteinerSecondary">
            <img src="img/logo-principal.png" alt="Logo">
        <div/>
        <div class="conteinerTertiary">

            <section class="conteinerQuarticiario">
                <a href="index.php"><svg style="width: 35px; height: 35px;"
                        class="MuiSvgIcon-root makeStyles-arrow-14 MuiSvgIcon-colorDisabled MuiSvgIcon-fontSizeLarge"
                        focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
                    </svg></a>
                <form method="POST" action="cadastrar.php" class=" conteinerQuinary" autoComplete="off">
                    <input id="outlined-basicss" class="cadLabel" placeholder="Nome*" variant="outlined" name="nome"
                        type="text" required fullWidth />
                    <input id="outlined-basicss" class="cadLabel" placeholder="Sobrenome*" variant="outlined"
                        name="sobrenome" type="text" required fullWidth />
                    <input id="outlined-basics" class="cadLabel" placeholder="Usuário*" variant="outlined"
                        name="usuario" type="text" required fullWidth />
                    <input id="outlined-basicss" class="cadLabel" placeholder="Password*" variant="outlined"
                        name="senha" type="password" required fullWidth />
                    <button id="outlined-basicss" class="cadLabelButton" placeholder="Entrar*" value="Entrar"
                        variant="outlined" type="submit" required fullWidth>Cadastre-se</button>
                </form>
            </section>
        </div>
    </div>

<body/>

<html/>
