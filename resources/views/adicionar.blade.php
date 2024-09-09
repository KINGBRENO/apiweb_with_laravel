<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form nome = "form" id = "adicionar"  method = "POST" action = "/inserir" >
        @csrf

        <label for="cpf">CPF:</label>
        <input type="text" name = "cpf" id = "Nome" placeholder = "digite seu cpf: "> <br><br>

        <label for="nome">Nome:</label>
        <input type="text" name = "nome" id = "nome" placeholder = "digite seu nome: " required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name = "data_nascimento" id = "data_nascimento" placeholder = "digite sua data_nascimento: " required><br><br>

        
        <input type = "submit" value="Inserir">

    </form>

    <h2>
    <form nome = "Listar" id = "Listar"  method = "GET" action = "/usuarios_listar" >
    
    <input type="submit" value = "Listar">
    </form>
    </h2>
    
</body>
</html>