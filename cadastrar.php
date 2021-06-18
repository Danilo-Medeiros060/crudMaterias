<?php

    require __DIR__.'/vendor/autoload.php';

    use \App\Entity\Materia;
    
    if(isset($_POST['titulo'],$_POST['descricao'],$_POST['dificuldade'])){
        $obMateria = new Materia;
        $obMateria->titulo = $_POST['titulo'];
        $obMateria->descricao = $_POST['descricao'];
        $obMateria->dificuldade = $_POST['dificuldade'];
        
        echo "<pre>"; print_r($obMateria); echo "</pre>"; exit;
    }
    
    include __DIR__.'/includes/header.php';
    include __DIR__.'/includes/formulario.php';
    include __DIR__.'/includes/footer.php';
