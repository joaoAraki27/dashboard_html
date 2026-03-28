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
            <h2>Gestão de Postagens</h2>
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
        
    <tbody>
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
</tbody>
<tfoot>
    <tr>
        <td colspan="6" align ="right" > <a href="add.postagem.php" <button class="btn-add"<i class="fa-solid fa-plus"></i> Adicionar Postagem</button></a></td>
    </tr>
</tfoot>
</table>
</div>
</div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>