<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">

        <?php include 'menu.php'; ?>

        <main>
            <section class="card-form">

                <div class="form-header">
                    <h2> <i class="fa-solid fa-user-plus"></i> Novo Usuário </h2>
                    <p> Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>
                
                <form action="processa.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required >
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="nome@empresa.com" required >
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" required >
                        </div>

                        <div class="form-group flex-1">
                            <label for="nivel">Nível</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" id="btn-salvar" class="btn-save"> Finalizar Cadastro </button>
                        <a href="usuarios.php" class="btn-cancel"> Cancelar </a>
                    </div>
                </form>
            </section>
        </main>
    </div>
     <?php include 'footer.php'; ?>
</body>

<script>
    const btnSalvar = document.getElementById("btn-salvar");

    btnSalvar.addEventListener('click', function () {
        
    console.log("teste")
    
    
    const inputNome = document.getElementById('nome').value;
    const inputEmail = document.getElementById('email').value;
    const inputSenha = document.getElementById('senha').value;
    const inputNivel = document.getElementById('nivel').value;

    if(inputNome && inputEmail && inputSenha !== "") {
    const novoUsuario = {nome: inputNome, email: inputEmail, senha:inputSenha, nivel:inputNivel};
    let lista = JSON.parse(localStorage.getItem("bancoUsuarios")) || [];

    lista.push(novoUsuario);

    localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

    alert("Usuario salvo com sucesso!");
    }
    else {
    alert("Há espaços em branco para ser preenchido!"); 
    }
    
    document.getElementById('nome').value = '';
    document.getElementById('email').value = '';
    });
</script>

</html>


