<?php

    $paginas = ['home'=>'Minha pagina home aqui', 'sobre'=>'sobre mim aqui' , 'contato'=>'meu contato aqui'];
    $page2=['sobre'=>'sobre mim aqui']
    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tutorial php</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
        background-color:#069;
        padding:8px 10px;
        text-align: center;
        }
        a{
        display: inline-block;
        margin: 0 10px;
        color: white;
        font-size:17px;



        }
        section{
            max-width: 960px;
            margin: 20px auto;
            padding: 0 2%;
        }

        h2{
            background-color:#069;
            color:white;
            padding: 8px 10px;
        }
        </style>
</head>
<body>
    <header>
        <?php
            foreach ($paginas as $key => $value) {
                echo '<a href="https://www.youtube.com/watch?v=h3jebyHaDrY'.$key.'"..>' .ucfirst($key). '</a>' ;

            }
            foreach($page as $chave => $value) {
                echo'<a href="https://afiliagrampr0.club.hotmart.com/lesson/k45g3YBN7l/metodo-ivy-lee-de-produtividade'.$chave.'"..>' .ucfirst($chave). '</a>';
            }
        ?>
        </header>
        <section>
            <h2><?php

                $pagina  = (isset($_GET['page']) ? $_GET['page'] : 'home');
                
                if(!array_key_exists($pagina, $paginas)){
                    $pagina = 'home';
                }
                echo ucfirst($pagina);

            ?></h2>
            <p><?php echo $paginas[$pagina] ?></p>
        </section>
</body>
</html>