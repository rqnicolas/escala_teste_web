<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    try {
        
        $stmt = $pdo->prepare("INSERT INTO Contatos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $telefone, $mensagem]);


        $to = "teste@escalaweb.com.br";
        $subject = "Novo Contato - " . $nome;
        $body = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
        $headers = "From: teste@escalaweb.com.br\r\n" . "Reply-To: $email\r\n";

        @mail($to, $subject, $body, $headers);

        echo "<script>alert('Mensagem enviada e salva com sucesso!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "Erro ao processar: " . $e->getMessage();
    }
}
?>
