<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Prático - Escala Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="mb-3 text-center">Formulário de Contato</h3>
                    <form action="enviar.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar Mensagem </button>
                    </form>
                    <div class="mt-3 text-center">
                        <a href="listar.php" class="text-decoration-none">Ver contatos cadastrados</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 