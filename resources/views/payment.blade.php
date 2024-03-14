<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/payment.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="all">
        <div class="header">
            <div>
                <a href="dashboard">
                Ver Veículos
                </a>
            </div>
            <div>
                <a href="login">
                    Minha conta
                </a>
            </div>
        </div>
        <div class="cardcontent">
            <form action="auth.php" method="post">
                <label for="user_email">Email:
                </label>
                <input type="email" name="user_email" id="user_email" required>
                <label for="user_password">Senha:
                </label>
                <input type="password" name="user_password" id="user_password" required minlength="8">
                <button type="submit">Autenticar
                </button>
            </form>
        </div>
    </div>
</body>
</html>