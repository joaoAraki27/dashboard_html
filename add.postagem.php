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



textarea{
    height: 250px;
    margin-bottom: 10px;
}

</style>
<body>

    <main class="login-container">
      <form action="#" method="POST">
        <h2 class="login-title">Cadastro de postagem</h2>
        <p>Preencha os dados para adicionar uma postagem</p>
        

        <input type="text" id="nome" placeholder="Digite o titulo da postagem" name="email" />
        <textarea type="text" name="cont" id="postagem" placeholder="Sobre o que fala sua postagem??"></textarea>


        <button class="btn-primary" id="btn-salvar" >Salvar</button>
        <a href="postagem.php" class="btn-secondary">Voltar</a>
    </form>
    </main>


</body>

<script>
    const btnSalvar = document.getElementById("btn-salvar");

    btnSalvar.addEventListener('click', function () {
        
    console.log("teste")
    
    
    const inputNome = document.getElementById('nome').value;
    const inputPostagem = document.getElementById('postagem').value;

    if(inputNome && inputPostagem !== "") {
    const novoUsuario = {nome: inputNome, postagem: inputPostagem};
    let lista = JSON.parse(localStorage.getItem("bancoPostagem")) || [];

    lista.push(novoUsuario);

    localStorage.setItem('bancoPostagem', JSON.stringify(lista));

    alert("Postagem salva com sucesso!");
    }
    else {
    alert("Há espaços em branco para ser preenchido!"); 
    }
    
    document.getElementById('nome').value = '';
    document.getElementById('postagem').value = '';
    });
</script>

</html>


