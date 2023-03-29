<?php

    # incluindo classes pessoa, pessoa fisica e juridica.
    require_once "src/pessoa.php";
    require_once "src/pessoafisica.php";
    require_once "src/pessoajuridica.php";

    # criando objeto da classe pessoa fisica.
    $pf = new PessoaFisica("Ronie", "ronie@email.com", "(61)9.9877-3245", "123.456.789-00");
    echo $pf;
    
    # criando objeto da classe pessoa juridica.
    $pj = new PessoaJuridica("Organizações Tabajara", "organizacao.tabajara@email.com", "(61)9.9899-5522", "123.456.789-00");
    echo $pj;