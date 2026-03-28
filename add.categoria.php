<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<style>

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: #f5f7fa;
    font-size: 1.5em;
}
h2{
    margin-bottom: 0px;
}
p{
    margin-top: 0px;
    font-size: 0.6em;
    color: #424242;
}

  .login-container {
    background: white;
    padding: 40px;
    border-radius: 12px;
    margin: auto;
    width: 500px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}


form {
    display: flex;
    flex-direction: column;
    width: 100%;
}

input {
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.btn-primary {
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: #007bff;
    color: white;
    cursor: pointer;
}

.btn-secondary {
    display: block;         
    text-align: center;     
    text-decoration: none;   
    background: #007bff;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 8px;
    margin-top: 10px;
    font-size: 0.6em;  
}





</style>
<body>

    <main class="login-container">
      <form action="autentificacao.php" method="POST">
        <h2 class="login-title">Cadastro de categoria</h2>
        <p>Preencha os dados para adicionar uma categoria</p>

        <input type="email" placeholder="Digite o nome da categoria" name="email" />


        <button class="btn-primary">Salvar</button>
        <a href="categorias.php" class="btn-secondary">Voltar</a>
    </form>
    </main>


</body>
</html>


