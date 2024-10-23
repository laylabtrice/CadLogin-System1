<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastre-se</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <main>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <section>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </section>
            <section>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </section>
            <section>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </section>
            <section>
                <label for="perfil">Perfil:</label>
                <select name="perfil">
                    <option value="admin">Admin</option>
                    <option value="gestor">Gestor</option>
                    <option value="colaborador">Colaborador</option>
                </select>
            </section>
            <button type="submit" id="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
    </main>
</body>
</html>
