<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href ='#'> Início </a></li>
                <li><a href ='#'> Projetos </a></li>
                <li><a href ='#'> Relatórios </a></li>
                <li><a href ='#'> configurações </a></li>
            </ul>
            <div class = "perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=joao+araki&background=008080&color=fff" alt="Avatar">
                <span>Joao Araki</span>
            </div>
        </nav>

        <main>
            <section class="container-cards">

                <article>
                    <h2>Modulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Modulo de Produtos</h2>
                    <p>Cadastre e gerencie os produtos disponíveis no sistema.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

                <article>
                    <h2>Modulo de Relatórios</h2>
                    <p>Visualize relatórios e acompanhe dados importantes.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>

        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvimento na aula de Web I </p>
    </footer>
</body>
</html>