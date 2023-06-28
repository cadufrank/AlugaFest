<?php 
session_start();
require_once "functions.php";
 $tabela= "cadastro";
 $order =" nome";
 $usuarios= buscar($connect,$tabela, 1, $order);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Alugue seu salão de festas de forma fácil!">
    <title>AlugaFest Consulta</title>
    <link rel="stylesheet"  href="consultastyle.php"/>
</head>
<body>
     

    <header class="cabecalho">
        <nav class="menu">
           <!-- <a class="menu-item" href="Index.php">Menu Principal</a> -->
           <?php  if (isset($_SESSION['ativa'])) {?>
            <h3> Bem vindo, <?php echo $_SESSION['nome']; ?></h3>
            <a href="logout.php" class="menu-botao">Sair</a>            
        </nav>
    
    </header>
    <main class="main-config">
        <section>
        <form class="container-secao1-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h1 class="secao1-title"> Reserva </h1>
                <h1 class="secao1-title2">Horários agendados:</h1>   
                <!-- Identificador da tabela -->
                <div class="container-tabela">
                    <table class="tabela">
                        <thead class="tabela-thead">
                            <tr> 
                            <th class="tabela-itens">Nome</th>
                             <th class="tabela-itens">Data</th> 
                             <?php foreach($usuarios as $usuario): ?>
                             <tr>
                             <td class="tabela-itens"><?php echo $usuario['nome'];?>  </td>
                            <td class="tabela-itens"><?php echo $usuario['reserva'];?>  </td> 
                            </tr> 
                            <?php endforeach;?>
                            </thead>
                    </table> 
                </div>  
        
        </section>
        <section class="container-secao2">
            <div class="container-reserva"> 
                
                <div class="reserva-content">
                            <a class="reserva-content-titulo">Selecione uma data para reservar ou atualizar sua reserva!</a>           
                            <label for="id"></label>
                            <label class="date-title" for="data">Nova Data:</label>
                            <input class="date-input" type="date" name="data" id="data">

                            <div class="reserva-content-botoes">
                                <div class="botoesalign">
                                <input class="reserva-botao" type="submit" value="reservar">
                                <a href="consulta.php" class="reserva-botao">Confirmar</a>
                                </div>
                                <br/>
                                <?php update($connect); //faz a atualização das datas usando o ID como referência.?>
                                 
                            </div>    
                </div>
            </div>
        <div class="gurizin">
            <img class="gurizin-img" src="Ikbal.png" alt="carinha">
        </div>
        </section>
     </form>
    </main>
    <footer class="rodape-background">
        
        <div class="social-media">
          <a  href="#"><img class="social-media-img" src="linkedin.png" alt="linkedin"/></a>
          <a  href="#"><img class="social-media-img" src="git.png" alt="GitHub"/></a>
        </div>
        <div class="rodape-background-dev">Developed By: FrankTeam</div>  
    </footer>
    <?php }else{
       header("location:index.php"); //envia para a pagina selecionada  
    }?>
</body>
</html>