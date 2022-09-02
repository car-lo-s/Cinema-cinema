<?php
require_once 'C:\xampp\htdocs\codigo\Cinema-cinema 2\php\filmeDAO.php';
$filmeDao = new filmeDAO($pdo);
$dados = $filmeDao->listar();

$nome = filter_input(INPUT_GET,'nome');
$genero = filter_input(INPUT_GET,'genero');
$tipo = filter_input(INPUT_GET,'tipo');
$roteirista = filter_input(INPUT_GET,'roteiro');
$caminho = filter_input(INPUT_GET,'caminho');
$descricao = filter_input(INPUT_GET,'descricao');


if($nome && $genero && $tipo && $roteirista && $caminho && $descricao){
    $filmeDao->add($nome,$genero,$tipo,$roteirista,$caminho,$descricao);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema-Cinema</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <header class="tp">
      <section class="tp-um">
        <h1>Cinema-Cinema</h1>
      </section>
      <nav class="tp-dois">
        <ul>
          <li>
            <a href="http://localhost/codigo/Cinema-cinema%202/?tela=filme"
              >Filmes</a
            >
          </li>
          <li>
            <a href="http://localhost/codigo/Cinema-cinema%202/?tela=serie"
              >Séries</a
            >
          </li>
          <li>
            <a href="http://localhost/codigo/Cinema-cinema%202/?tela=desenho"
              >Desenho</a
            >
          </li>
          <li>
            <a href="http://localhost/codigo/Cinema-cinema%202/?tela=trailer"
              >Trailer</a
            >
          </li>
          <li onclick="cad()">
            Cadastro
          </li>
          <li onclick="edit()">
           Edição
          </li>
        </ul>
      </nav>
    </header>
    <section class="container">
      <section class="cadastro">
        <form action="" method="get">
          <div class="cd-input">
            <div> 
                <input type="text" name="nome" id="" placeholder="Nome: " />
              </div>
              <div>
                <input type="text" name="genero" id="" placeholder="Genero: "/>
              </div>
              <div>
                <input type="text" name="tipo" id="" placeholder="Tipo: "/>
              </div>
              <div>
                <input type="text" name="roteiro" id="" placeholder="Roteirista:"/>
              </div>
              <div>
                <input type="text" name="caminho" id="" placeholder="Caminho arquivo: "/>
              </div>
          </div>
          <div class="cd-text">
            <textarea name="descricao" id="" cols="30" rows="10" placeholder="Descrição do filme:"></textarea>
          </div>
          
          <input type="submit" value="Cadastrar" class="btn">
        </form>
      </section>
      <section class="edicao">
        <table>
          <tr>
            <th>Nome</th>
            <th>Genero</th>
            <th>roteirista</th>
            <th>Editar</th>
            <th>Apagar</th> 
          </tr>
          <?php foreach ($dados as $a): ?>
            <tr>
              <td><?= $a->getnome(); ?></td>
              <td><?= $a->getgenero(); ?></td>
              <td><?= $a->getroteirista(); ?></td>
              <td class='edicao-btn btne' onclick="editar('<?=$a->getnome();?>')">Editar</td>
              <td class='edicao-btn btna' onclick="apagar('<?=$a->getnome();?>')"><a href="php\confirmacao.php/?identificacao=<?=$a->getid();?>">Apagar</a></td> 
            </tr>
          <?php endforeach; ?>
        </table>
      </section>
    </section>
    <section class='tela-editar'>

    </section>
    <script src="./JS/manipulacao.js"></script>
  </body>
</html>
