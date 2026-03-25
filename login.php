<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="dash.css">
</head>
<style>
    .login-container {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    height:50%;
    margin: 100px;
    display: flex;
    justify-content: center;
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
    background: none;
    border: none;
    color: #007bff;
    cursor: pointer;
}
</style>
<body>
  <div class="dashboard-container">
    
    <?php include 'menu.php'; ?>

    <main class="login-container">
      <form>
        <h2 class="login-title">Se cadastre em nossa plataforma</h2>

        <input type="email" placeholder="Your email" name="email" />
        <input type="password" placeholder="Your password" name="password" />

        <button class="btn-primary">Log In</button>

        <p class="register-text">
          Não está registrado?
          <button class="btn-secondary" type="button">
            Criar conta
          </button>
        </p>
      </form>
    </main>

  </div>
</body>
</html>


