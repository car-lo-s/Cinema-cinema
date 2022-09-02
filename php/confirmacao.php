<?php
require_once 'C:\xampp\htdocs\codigo\Cinema-cinema 2\php\filmeDAO.php';
$filmeDao = new filmeDAO($pdo);
$id = filter_input(INPUT_GET,'identificacao');
$filmeDao->delete($id);

header('Location:http://localhost/codigo/Cinema-cinema%202/edicao.php'); 
exit;