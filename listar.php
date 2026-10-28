<?php
require "conexao.php";
$stmt = PDO->query("SELECT * FROM Contatos ORDER BY id DESC");
$contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Contatos Cadastrados</h2>
        <a href="index.php" class="btn btn-secondary">Voltar ao Formulário</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= htmlspecialchars($c['nome']) ?></td>
                <td><?= htmlspecialchars($c['email']) ?></td>
                <td><?= htmlspecialchars($c['telefone']) ?></td>
                <td><?= htmlspecialchars($c['mensagem']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>