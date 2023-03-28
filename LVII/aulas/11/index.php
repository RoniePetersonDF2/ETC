<?php
    # incluido as classes e interfaces animal, cachorro e gato.
    require_once "src/animal.php";
    require_once "src/cachorro.php";
    require_once "src/gato.php";
    
    # criando um objeto, $dog, da classe cachorro.
    $dog = new Cachorro();
    $dog->emitirSom();

    # criando um objeto, $cat, da classe gato.
    $cat = new Gato();
    $cat->emitirSom();