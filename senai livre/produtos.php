<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="login.php">
    <link rel="stylesheet" href="registro.php">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="headerlogin">
            <div class="img">
                <img src="../img/senai.png" alt="Logo">
            </div>
            <div class="pesquisa">
                <input type="text" class="busque" required placeholder="Busque produtos, marcas e muito mais">

            </div>
            <div class="button-borders">
                <a href="index.php"><button class="primary-button">Sair</button></a>
            </div>
            <div class="hamb">
                <svg viewBox="0 0 100 80" width="20" height="20">
                    <rect width="100" height="20"></rect>
                    <rect y="30" width="100" height="20"></rect>
                    <rect y="60" width="100" height="20"></rect>
                </svg>
            </div>

        </div>
    </header>
    <main class="prod">
        <section class="descri">
            <div class="frit">
                <img src="../img/fritadeira.png" alt="frit">
            </div>

            <div class="des">
                <p><strong>Fritadeira Elétrica Air Fryer 3,2l Eaf20 Electrolux 127v</strong></p>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star-half-stroke"></i>
                <br><br>
                <p id="valor"><b> Subtotal: R$670,00</b></p>
                <p class="verclaro" id="parc">em 10x de R$67,00 sem juros</p>
                <p class="verescuro">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                <br>
                <p class="cinza">Potência: 1400W</p>
                <p class="cinza">Pesa 5.5kg.</p>
                <p class="cinza">Ideal para preparar suas refeições.</p>
            </div>

            <div class="compra">
                <p>Adicionar ao carrinho <span><i class="fa-solid fa-cart-plus"></i></span></p>
                <br>
                <div class="button-compra">
                    <button type="button" id="diminuir">
                        -
                    </button>
                    <p id="contador"> 1 </p>
                    <button type="button" id="aumentar">
                        +
                    </button>
                </div>
                <br><br>
                <div class="button-borders">
                    <button class="primary-button">Compre agora</button>  
                </div>
            </div>

        </section>

        <section class="sugestoes">
            <div class="titulo">
                <p>Sugestões:</p>
            </div>
            <div class="flex">
                <div class="camera">
                    <img src="../img/camera.png" alt="camera" class="c">
                    <div class="button-borders">
                        <button class="primary-button">Oferta do dia</button>
                    </div>
                    <p><b>R$300,00</b></p>
                    <p class="verclaro">10x de R$30,00 sem juros</p>
                    <p class="verescuro">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="cinza">Câmera fotográfica</p>
                </div>
                <div class="laptop">
                    <img src="../img/laptop.png" alt="laptop" class="l">
                    <div class="button-borders">
                        <button class="primary-button">Oferta do dia</button>
                    </div>
                    <p><b>R$1900,00</b></p>
                    <p class="verclaro">10x de R$190,00 sem juros</p>
                    <p class="verescuro">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="cinza">LapTop</p>
                </div>
                <div class="cadeira">
                    <img src="../img/cadeiraGamer.png" alt="cadeira" class="cg">
                    <div class="button-borders">
                        <button class="primary-button">Oferta do dia</button>
                    </div>
                    <p><b>R$1600,00</b></p>
                    <p class="verclaro">10x de R$160,00 sem juros</p>
                    <p class="verescuro">Frete grátis <span><i class="fa-solid fa-bolt"></i></span></p>
                    <p class="cinza">Cadeira Gamer</p>
                </div>
            </div>
        </section>
        <script src="https://kit.fontawesome.com/0f05c75053.js" crossorigin="anonymous"></script>
    </main>
<script>
    let count = 1;
    const contador = document.getElementById("contador");
    const aumentarQtd = document.getElementById("aumentar");
    const diminuirQtd = document.getElementById("diminuir");
    const valorUn = document.getElementById("valor");
    const valorParc = document.getElementById("parc");

    function aumenta(){
        count +=1;
        calcula();
    }
    function diminui(){
        if(count > 0){
            count -=1;
            calcula();
        }
    }
    function calcula(){
        let valorproduto = 670;
        const result = count * valorproduto;
        valorUn.innerHTML = result;
        valorParc.innerHTML = result / 10
        contador.innerHTML = count;
    }

    aumentarQtd.addEventListener("click", aumenta);
    diminuirQtd.addEventListener("click", diminui);
    

</script>
    <footer>
        <div class="footer" id="footer">
            <div class="imgfundo">
                <h5>Copyright <span><i class="fa-regular fa-copyright"></i></span> 1999-2022 Ebazar.com.br LTDA</h5>
                <br><br>
                <h5>CNPJ n.°03.007.331/0001-41 / Av. das Nações Unidas, n°3.003, Bonfim, Osasco/SP</h5>
                <h5>CEP 06233-903- empresa do grupo SENAI Livre</h5>
            </div>
            <div>
                <h5>Trabalhe conosco</h5>
                <h5>Contato</h5>
                <h5>Termos e condições</h5>
            </div>
            <div>
                <h5>Acessibilidade</h5>
                <h5>Como cuidamos da sua privacidade</h5>
                <h5>Informações sobre seguros</h5>
            </div>
        </div>
    </footer>
</body>

</html>