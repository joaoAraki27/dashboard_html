<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="dash.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    .btn-add{
    background-color: #004a8d;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}
</style>
<body>
    <div class="dashboard-container">

        <?php include 'menu.php'; ?>

    <main>
        <div class="header-content">
            <h2>Gestão de Usuários</h2>
            <p>Visualize e gerencie as permissões dos usuários do sistema .</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Ações</th>
                    </tr>
                </thead>
        
<!-- <tbody>
    <tr>
        <td>01</td>
        <td>Eric Freitas</td>
        <td>eric@unifev.edu.br</td>
        <td>Administrador</td>
        <td><span class="badge ativo">Ativo</span></td>
        <td><button class="Btn-icon"><i class="fa-solid fa-pen"></i></button></td>
    </tr>
    <tr>
        <td>02</td>
        <td>Ana Souza</td>
        <td>ana.souza@email.com</td>
        <td>Editor</td>
        <td><span class="badge ativo">Ativo</span></td>
        <td><button class="Btn-icon"><i class="fa-solid fa-pen"></i></button></td>
    </tr>
</tbody> -->

<tbody id="lista-tela" ></tbody>

<tfoot>
    <tr>
        <td colspan="6" align ="right" > <a href="cad-usuarios.php" <button class="btn-add"<i class="fa-solid fa-plus"></i> Adicionar Usuário</button></a></td>
    </tr>
</tfoot>
</table>
</div>
</div>
</main>

<?php include 'footer.php'; ?>

</body>

<script>
    function carregarDados(){
        const ul = document.getElementById('lista-tela');

        let lista = JSON.parse(localStorage.getItem('bancoUsuarios')) || [];

        ul.innerHTML = '';

        lista.forEach(function(usuario, index) {
            ul.innerHTML +=
            `
            <tr>
                <td>${index}</td>
                <td>${usuario.nome}</td>
                <td>${usuario.email}</td>
                <td>${usuario.nivel == 1 ? "Usuário" : "administrador"}</td>
                <td><span class="badge ativo">Ativo</span></td>
                <td>
                <button class="Btn-icon"><i class="fa-solid fa-pen" onclick="editar(${index})" style="color: blue; margin-left: 10px;"></i></button>
                <button class="Btn-icon"><i class="fa-solid fa-trash-can" onclick="deletar(${index})" style="color: red"; margin-left: 10px;"></i></button>
                </td>
            </tr>
            `
        });
    }

    function deletar(index) {
     if(confirm("Tem certeza que deseja apagar?")) {
        let lista = JSON.parse(localStorage.getItem('bancoUsuarios'));

        lista.splice(index, 1);

        localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

        carregarDados();
    }
    }

    function editar(index) {

        let lista = JSON.parse(localStorage.getItem('bancoUsuarios'));


        let novoNome = prompt("Qual o novo nome do usuário");
        let novoEmail =  prompt("Qual o novo nome do usuário");

        lista[index].nome = novoNome
        lista[index].email = novoEmail

         localStorage.setItem('bancoUsuarios', JSON.stringify(lista));

    
        carregarDados();

    }

    carregarDados();
</script>

</html>