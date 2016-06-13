<html>
    <head>
        <title>Das Marias</title>
        <meta charset="UTF-8">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
        <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <font face="Trebuchet MS, Arial, Helvetica, sans-serif"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/arquivo.js"></script>
       
    </head>
    <body>


        <header>
            <div class="midia">
                <a class="face" href="https://www.facebook.com/dasmariassemijoias" target="_blank">
                    <img src="img/face.png">
                </a>
                <a class="insta" href="https://www.instagram.com/dasmariassemijoias" target="_blank">
                    <img src="img/insta.png">
                </a>
            </div>
             <div class="menu">
                <div class="menuItem"><a class="menuLink" href="?pagina=home">Home</a></div>
                <div class="menuItem"><a class="menuLink" href="?pagina=empresa">Empresa</a></div>
                <div class="menuItem"><a class="menuLink" href="?pagina=produtos">Produtos</a></div>
                <div class="menuItem"><a class="menuLink" href="?pagina=vendas">Vendas</a></div>
                <div class="menuItem"><a class="menuLink" href="?pagina=contato">Contatos</a></div>
             </div>
             
            <div class="logo"> 
                 <a " href="?pagina=home"><img src="img/logo.png"/> </a>
            </div>



        </header>

        <main>
            <?php
            if (isset($_GET['pagina'])) {
                include "paginas/" . $_GET['pagina'] . ".php";
            } else {

                include "paginas/home.php";
            }
            ?>
        </main>

        <footer>           
            <p>
                (62) 3637-2142<br>
                R. Benjamin Constant, 674, Goiânia - GO, 74525-050               
            </p>
             <div id="copyright">Copyright © 2016 - Design Grafico Modulo III Senac-GO | Todos os direitos reservados e protegidos</div>
        </footer>
    </body>
</html>