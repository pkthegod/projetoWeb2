<header>
    <div id="header_central">
        <?php
            if ( isset($_SESSION["user_portal"])  ) {
                $user = $_SESSION["user_portal"];
                
                $saudacao = "SELECT nomeprofessor ";
                $saudacao .= "FROM professores ";
                $saudacao .= "WHERE professorID = {$user} ";
                
                $saudacao_login = mysqli_query($conecta,$saudacao);
                if(!$saudacao_login) {
                    die("Falha no banco");   
                }
                $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                $nome = $saudacao_login["nomeprofessor"];
        ?>
            <div id="header_saudacao"><h5>Bem vindo, <?php echo $nome ?> - <a href="sairprofessor.php">Sair</a></h5></div>
        <?php
            }
        ?>
        <img src="">
        <img src="">
    </div>
</header>