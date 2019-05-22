 <?php
//Passo 1 abrir conexão
    $conecta = mysqli_connect("localhost","root","","andes");
// Passo 2 testar conexão
    if (mysqli_connect_errno()  ){
        die("Conexao falhou: " . mysqli_connect_errno() ) ;
    }
?>