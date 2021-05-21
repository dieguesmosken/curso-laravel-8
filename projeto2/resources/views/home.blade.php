<!DOCTYPE html>
<html lang="pt-BR">
<title>HIPPOTEC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
 <script src="https://kit.fontawesome.com/e1fb4913e4.js" crossorigin="anonymous"></script>
<style>

body,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Lato", sans-serif
}

.w3-bar,
h1,
button {
    font-family: "Montserrat", sans-serif
}

.fa-anchor,
.fa-coffee {
    font-size: 200px
}
</style>

<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-#00BFFF"
                href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="/" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
            <a href="/Sobre" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">SOBRE NÓS</a>
            <a href="/Produtos" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">TABELA
                DOENÇAS</a>
            <a href="/Cadastro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">CADASTRO</a>
            <a href="https://coronavirus.saude.gov.br/"
                class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">COVID-19</a>
            <a href="/error/307?OriginPage=How-It-Works" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">COMO
                FUNCIONA</a>
                <?php 
                if(!empty($_SESSION['id'])){
                    ?>
                    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><?php echo $_SESSION['nome'] ?></a>
                    <a href="login/sair" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sair</a>
                    <?php
                }else{
                    echo "<a href='/login/login' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white'>Login</a>";
                }
                ?>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="/Sobre" class="w3-bar-item w3-button w3-padding-large">Sobre</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-blue w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">BEM VINDO!</h1>
        <p class="w3-xlarge">User: {{$usuario}} Type: <b>{{$perfil}}</b></p>
        <p class="w3-xlarge">MAIS SAÚDE PARA VOCÊ</p>
        <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">BAIXE O APP</button>
    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h1>{{$empresa}}</h1>
                <h5 class="w3-padding-32">A {{$empresa}} É UMA EMPRESA VOLTADA PARA A INOVAÇÃO DIGITAL DENTRO DA
                    MEDICINA,
                    A NOSSA IDÉIA É TORNAR MAIS FÁCIL A PREVENÇÃO DE CONTÁGIOS E CRESCIMENTO DE DOENÇAS NA SOCIEDADE,
                    ASSIM COMO A DISSEMINAÇÃO DE CONHECIMENTO DA ÁREA,
                    AJUDANDO A CONSTRUIR UM MUNDO MAIS SAUDAVEL, INTELIGENTE E CURIOSO.</h5>


            </div>

            <div class="w3-third w3-center">
                <i class="fa fa-anchor w3-padding-64 w3-text-blue"></i>
            </div>
        </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <i class="fa fa-coffee w3-padding-64 w3-text-blue w3-margin-right"></i>
            </div>

            <div class="w3-twothird">
                <h1>Lorem Ipsum</h1>
                <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

                <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
        <h1 class="w3-margin w3-xlarge"><a href="/error?OriginPage=notExists">ERRO INTENCIONAL</a></h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
        <div class="w3-xlarge w3-padding-32">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by <a href="https://www.linkei.com.br/dieguesmsoken" target="_blank">Dieguesmosken &copy;</a></p>
    </footer>

    <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

</body>

</html>