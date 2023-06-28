<?php 
 session_start();
require_once "functions.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alugue seu salão de festas de forma fácil!">
    <title>AlugaFest Cadastro</title>
    <link rel="stylesheet"  href="cadastrostyle.php"/>
</head>
<body>
    <header class="cabecalho">
        <nav class="menu">
            <a class="menu-item" href="Index.php">Menu Principal</a>
            <a href="login.php" class="menu-botao">Login</a>        
        </nav>

    </header>
    <main class="conteudo-principal">
        <section class="conteudo-principal-formulario">
            <div class="cadastro">
                <h1 class="cadastro-titulo"> Cadastro </h1>
                <p class="cadastro-info">Adicione as informações a seguir</p>   
            </div>
            <form class="nome" action="" method="POST">
                    <div class="formulario-caixa-nome">
                        <label class="formulario-caixa-texto">Informe seu nome</label>
                        <br/>
                        <input class="campo-name" type="text" name="nome" id="name"placeholder="Informe seu nome">
                    </div>             

                    <div class="formulario-caixa-email">
                        <label class="formulario-caixa-texto">Informe e-mail</label>
                        <br/>
                        <input class="campo-email" type="email" name="email" id="email" placeholder="Informe e-mail"> 
                    </div>             
                    <div class="formulário-caixa-senha">
                        <label class="formulario-caixa-texto-senha">Informe uma Senha</label>
                        <br/>
                        <input class="campo-senha" type="password" name="senha" id="password"placeholder="Informe sua Senha">
                        <br/>
                        <input class="campo-senha" type="password" name="repetesenha" id="password"placeholder="Confirme sua Senha">
                        <br>
                        <input class="buton-send" type="submit" name="cadastrar" value="Cadastrar"/>
                    </div>
                    <br/>
                    <?php
                   $tabela= "cadastro";
                   $order =" nome";
                   $usuarios= buscar($connect,$tabela, 1, $order);
                   inserirusuarios($connect);
                   ?>
                
            </form>   
            
        </section>
        <div class="gurizin">
            <img class="gurizin-img" src="Ikbal.png" alt="carinha">
        </div> 
        <section class="conteudo-secundario">
            <div class="conteudo-secundario-bloco">
            <p class="conteudo-secundario-texto1">Faça a sua reserva e garanta a data da sua tão esperada festa com seus amigos!</p>
            <img class="conteudo-secundario-imagem" src="calendario.png" alt="calendario"/>
            <p class="conteudo-secundario-texto2">Nunca foi tão fácil achar uma data para você, escolha, clique, e pronto!</p>
            </div>
        </section>
    </main>
    <footer class="rodape-background">
        
        <div class="social-media">
          <a  href="#"><img class="social-media-img" src="linkedin.png" alt="linkedin"/></a>
          <a  href="#"><img class="social-media-img" src="git.png" alt="GitHub"/></a>
        </div>
        <div class="rodape-background-dev">Developed By: FrankTeam</div>   
    </footer>
</body>
</html>