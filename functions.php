<?php
  $host ="localhost";
  $db_user ="root";
  $db_pass ="";
  $db_name ="alugafest";
 //conexão com o banco de dados !


   $connect = mysqli_connect( $host, $db_user, $db_pass, $db_name);
   if ($connect){
   //echo está sem valor para que não conste a mensagem de conexão de banco no layout do site!
    echo "";
   }else{
   echo "";
   }
   function login($connect){
    if (isset($_POST['enviar'])  AND !empty($_POST['email']) AND !empty($_POST['senha'])){
    
$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);//validação das informações
$senha= sha1($_POST['senha']);
$query= "SELECT * FROM cadastro WHERE email='$email' and senha='$senha'";
 
$executar = mysqli_query($connect,$query);
$return =mysqli_fetch_assoc($executar);


if(!empty($return['email'])){
   echo "Bem Vindo(a)-"  . $return['nome'];

      session_start();
      $_SESSION['nome'] = $return['nome'];
      $_SESSION['id'] =$return['id'];
      $_SESSION['ativa'] = TRUE;
      header("location:consulta.php");//header envia para a pagina selecionada


} else{
    echo "Usuario não encontrado!";
}
  }
}
   function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("location:index.php");
   }
  //seleciona(busca) apenas um item na tabela com base no id
   function buscaunica($connect,$tabela,$id){

     $query= "SELECT * FROM $tabela WHERE id= ". (int)$id;//int transforma em valor inteiro
     $execute= mysqli_query($connect,$query);
     $result = mysqli_fetch_assoc($execute);
     return $result;
    }
//busca todos os resultados no BD com base no WHERE
  
function buscar($connect,$tabela,$where= 1, $order=""){
  
  if(!empty($order)){
    $order= "ORDER BY $order";
  }
     $query= "SELECT * FROM $tabela WHERE $where $order";
     $execute= mysqli_query($connect,$query);
     $results = mysqli_fetch_all($execute, MYSQLI_ASSOC);
     return $results;
}
//Inserir Novos Usuarios 
function inserirusuarios($connect){

 if (isset($_POST['cadastrar'])  AND !empty($_POST['email'])  AND !empty($_POST['senha'])){
  $erros = array();

  if ($_POST['senha'] != $_POST['repetesenha']) {
  $erros[] = "ihhh, as senhas não conferem!!!";
  }

  $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);//validação das informações

  $nome=mysqli_real_escape_string($connect,$_POST['nome']);

  $senha= sha1($_POST['senha']);//O SHA1 (Secure Hash Algorithm 1) é usado principalmente para verificar a integridade dos dados e fornecer uma identificação única para uma determinada entrada

  $queryemail = "SELECT email FROM cadastro WHERE email = '$email'";
  $buscaemail = mysqli_query($connect, $queryemail);
  $verifica= mysqli_num_rows($buscaemail); //  trás o numero de linhas da caluna email
      
  if(!empty($verifica)){
  $erros[] = "Ooops, e-mail já cadastrado!";
  }
  if (empty($erros)){
  //inserir o usuario depois da verificação
  $query= "INSERT INTO cadastro (nome,email,senha,reserva)
  VALUES('$nome','$email','$senha',NOW())";
  $executar = mysqli_query ($connect,$query);

  if($executar){
    echo"Usuario cadastrado com sucesso! <br/>Prossiga para Login 😊";
    }else{
    echo" Falha ao inserir usuario!";
    }
    }else{
    foreach ($erros as $erro) {
   echo"<p> $erro</p>";
   }
  }
 }
}

function update($connect){
    // Obtém o ID do usuário logado
    $userID = $_SESSION['id'];
    // Consulta SQL para buscar o ID do usuário logado no banco de dados
    $sql = "SELECT id FROM cadastro WHERE id = $userID";
    // Executa a consulta
    $result = $connect->query($sql);
    // Verifica se a consulta retornou algum resultado
   if ($result->num_rows > 0) {
     // Obtém o ID do banco de dados e atribui à variável $id
     $row = $result->fetch_assoc();
     $id = $row['id'];

     // Verifica se o formulário foi enviado
      if ($_SERVER["REQUEST_METHOD"] === "POST") {

     // O registro foi encontrado, então atualiza a data
       if (!empty($_POST['data'])) {
       $novaData = $_POST["data"];
       $updateSql = "UPDATE cadastro SET reserva = '$novaData' WHERE id = $userID";
       if ($connect ->query($updateSql) === TRUE){
        echo "A data foi reservada, clique em confirmar para finalizar!";
        }
    }   
  }
 }
}
?>
