<?php
require_once 'C:\xampp\htdocs\codigo\Cinema-cinema 2\php\filmeDAO.php';
$filmeDao = new filmeDAO($pdo);
$dados = $filmeDao->listar();
$tipo = filter_input(INPUT_GET,'tela');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema-Cinema</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header class="tp">
        <section class="tp-um">
            <h1>Cinema-Cinema</h1>
            <div class="tp-campo">
                <input type="text" name="tp-pesquisa" id="">
                <div class="tp-lupa">
                    <img src="./img/search.svg" alt="">
                </div>
            </div>
        </section>
        <nav class="tp-dois">
            <ul>
                <li><a href="http://localhost/codigo/Cinema-cinema%202/?tela=filme">Filmes</a></li>
                <li><a href="http://localhost/codigo/Cinema-cinema%202/?tela=serie">Séries</a></li>
                <li><a href="http://localhost/codigo/Cinema-cinema%202/?tela=desenho">Desenho</a></li>
                <li><a href="http://localhost/codigo/Cinema-cinema%202/?tela=trailer">Trailer</a></li>
            </ul>
        </nav>
    </header>
    <section class="container">
        <?php foreach($dados as $item):?>
         <?php if ($tipo == 'filme' && $item->gettipo() == 'filme'):?>
            <section class="info">
            <div class="info-img">
            <div class="img" style="background-repeat: no-repeat; background-image: url('<?=$item->getcaminho();?>')"></div>
            </div>
            <div class="info-dado">
                <p class="info-titulo"> <?= $item->getnome(); ?> </p>
                <p> <?= $item->getdescricao(); ?> </p>
                <p>Responsavel: <?= $item->getroteirista(); ?> </p>
                <p>Tipo: <?=$item->gettipo();  ?></p>
            </div>
            </section>    
            <?php endif;?>
            <?php if ($tipo == 'serie' && $item->gettipo() == 'serie'):?>
            <section class="info">
            <div class="info-img">
            <div class="img" style="background-repeat: no-repeat; background-image: url('<?=$item->getcaminho();?>')"></div>
            </div>
            <div class="info-dado">
                <p class="info-titulo"> <?= $item->getnome(); ?> </p>
                <p> <?= $item->getdescricao(); ?> </p>
                <p>Responsavel: <?= $item->getroteirista(); ?> </p>
                <p>Tipo: <?=$item->gettipo();  ?></p>
            </div>
            </section>    
            <?php endif;?>
            <?php if ($tipo == 'desenho' && $item->gettipo() == 'desenho'):?>
            <section class="info">
            <div class="info-img">
            <div class="img" style="background-repeat: no-repeat; background-image: url('<?=$item->getcaminho();?>')"></div>
            </div>
            <div class="info-dado">
                <p class="info-titulo"> <?= $item->getnome(); ?> </p>
                <p> <?= $item->getdescricao(); ?> </p>
                <p>Responsavel: <?= $item->getroteirista(); ?> </p>
                <p>Tipo: <?=$item->gettipo();  ?></p>
            </div>
            </section>    
            <?php endif;?>

        <?php endforeach; ?>
    </section>
</body>
</html>