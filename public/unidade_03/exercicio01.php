 <?php
//Passo 1 abrir conexão
    $conecta = mysqli_connect("localhost","root","","andes");
// Passo 2 testar conexão
    if (mysqli_connect_errno()  ){
        die("Conexao falhou: " . mysqli_connect_errno() ) ;
    }
?>
<?php
    $consulta_categorias = "SELECT * FROM categorias";
    $categorias = mysqli_query($conecta, $consulta_categorias); 

    if (!$categorias ){
        die("Falha na consulta ao banco.");
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>
<body>
</body>
</html>

<?php
    mysqli_close($conecta);
?>