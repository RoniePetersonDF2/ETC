<?php
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
 </head>
 <body>
    <h1>Cliente</h1>
    <form action="" method="get">
        <fieldset>
            <legend>Dados dos clientes</legend>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" placeholder="Informe o nome do cliente" size="100" required autofocus><br><br>
            <label for="email">E-mail</label><br>
            <input type="email" name="email" placeholder="Informe o e-mail do cliente" size="100" required><br><br>
            <label for="dataAtual">Data nascimento</label><br>
            <input type="date" name="dataAtual" required ><br><br>
            <label for="sexo">Sexo</label><br>
            <select name="sexo" >
                <option value="">Masculino</option>
                <option value="">Feminino</option>
                <option value="">Não informado</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <label for="logradouro">Logradouro</label><br>
            <input type="text" name="logradouro" placeholder="Informe o logradouro" size="100" required><br><br>
            <label for="bairro">Bairro</label><br>
            <input type="text" name="bairro" placeholder="Informe o nome do bairro" size="100" required><br><br>
            <label for="complemento">Complemento</label><br>
            <input type="text" name="complemento" size="100" placeholder="Informe o complemento do endereço (se existir)"><br><br>
            <label for="numero">Numero</label><br>
            <input type="text" name="numero" placeholder="Informe o número (se existir)"><br><br>
            <label for="cidade">Cidade</label><br>
            <input type="text" name="cidade" placeholder="Informe a cidade" required ><br><br>
            <label for="uf">UF</label><br>
            <select name="uf">
                <option value="DF">DF</option>
            </select><br><br>
            <label for="cep">CEP</label><br>
            <input type="text" name="cpe" placeholder="Informe o CEP" required >            
        </fieldset><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
 </body>
 </html>   