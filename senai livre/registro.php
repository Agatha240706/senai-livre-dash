<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registro</title>
</head>

<body>
    <header class="header-L">
        <img src="img/senai.png" alt="Logo">
        <nav>
            <a href="index.php">Sair</a>
        </nav>

    </header>

    <main>
        <section id="form" class="form-formulario-senailivre">
            <div class="caixa">
                <div id="form-texto-registro">
                    <h1>Registrar-se</h1>
    
                </div>
                <div id="form-formulario">
                    <form action="" method= POST>
                        <div class="form-formulario-nome">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" required placeholder="Nome completo">
                        </div>
                        <div class="form-formulario-email">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" required placeholder="E-mail">
                        </div>
                        <div class="form-formulario-usuario">
                            <label for="usuario">Nome de usuário</label>
                            <input type="text" name="login" id="login" required placeholder="Informe seu login" maxlength="10">
                        </div>
                        <div class="form-formulario-senha">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" required placeholder="informe sua senha"> 
    
                        </div>
                        
                        <br>
                        <div class="form-formulario-registrar-se">
                            <button type="submit">Registrar-se</button>
                        </div>
                        <br>
                        <div class="form-formulario-possuo-cadastro">
                            <a href="login.php">Possuo cadastro >></a>
                        </div>
    
                    </form>
                </div>
    

            </div>
           
        </section>
    </main>
</body>
