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
            <h2>Gestão de Categorias</h2>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th></th>
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
<tbody id="lista-categorias" ></tbody>

<tfoot>
    <tr>
        <td colspan="6" align ="right" > <a href="add.categoria.php" <button class="btn-add"<i class="fa-solid fa-plus"></i> Adicionar Categoria</button></a></td>
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
        const ul = document.getElementById('lista-categorias');

        let lista = JSON.parse(localStorage.getItem('bancoCategorias')) || [];

        ul.innerHTML = '';

         lista.forEach(function(usuario, index) {
            ul.innerHTML +=
            `
            <tr>
                <td>${index}</td>
                <td>${usuario.nome}</td>
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
        let lista = JSON.parse(localStorage.getItem('bancoCategorias'));

        lista.splice(index, 1);

        localStorage.setItem('bancoCategorias', JSON.stringify(lista));

        carregarDados();
    }
    }

    function editar(index) {

        let lista = JSON.parse(localStorage.getItem('bancoCategorias'));


        let novoNome = prompt("Qual o novo nome da categoria?");;

        lista[index].nome = novoNome

         localStorage.setItem('bancoCategorias', JSON.stringify(lista));

    
        carregarDados();

    }

    carregarDados();
</script>
</html>