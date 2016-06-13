<html>
    <head>
        <title>Das Marias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>


        <header>
            <div class="logo"> 
                <img src="img/logo.png"/>
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
            
        </footer>
    </body>
</html>