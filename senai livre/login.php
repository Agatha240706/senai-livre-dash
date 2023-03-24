<?php
    include ("conexao.php");

    if($_SERVER{"REQUEST_METHOD"} == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue (":login", $login);
        $stmt->bindValue (":senha", $senha);
        $stmt->execute();

        if($stmt->RowCount () >0){
            $result = "Pode logar";
        }else {
            $result = "Não pode logar";
        }   

        echo "<script>alert('{$result}')</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <header class="header-L">
        <img src="img/senai.png" alt="logo">
        <nav>
            <a href="index.php">Sair</a>
        </nav>
    </header>

    <main>
        <section id="form" class="form-formulario-senailivre">
            <div class="caixa">
                <div id="form-texto">
                    <h1>Por favor inscreva-se!</h1>
                </div>
                <div id="form-formulario">
                    <form action="" method="POST">
                        <div class="form-formulario-email">
                            <label for="login">Login</label>
                            <input type="text" name="login" id="login" required placeholder="informe seu login">
                        </div>

                        <div class="form-formulario-senha">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" required placeholder="informe a sua senha">
                        </div>

                        <div class="form-formulario-submit">
                           <button type="submit">Logar</button>
                        </div>
                    </form>
                   <div class="form-formulario-submit2">
                       <a href="registro.php"><button type="button">Ainda não se cadastrou? Cadastre-se</button></a>
                   </div>
                </div>

            </div>
                      

        </section>
    </main>
    
</body>
</html>