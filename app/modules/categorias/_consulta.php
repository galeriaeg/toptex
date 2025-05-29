<?php
	include "session.php"; // Inclui o arquivo de sessão
	
	require_once "config/conecta.php"; // Inclui o arquivo de conexão com o banco de dados
	
    $sql = "SELECT id, nome FROM t_categoria ORDER BY nome ASC";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }
 
    $stmt->execute(); 
    $result = $stmt->get_result(); 
    
    $categorias = []; // Inicializa o array de categorias vazio
    if ($result) {
        $categorias = $result->fetch_all(MYSQLI_ASSOC); // Pega todas as linhas como um array associativo
    }

    if (!empty($categorias)) {

        // use um loop:
        echo "<div>";
        foreach ($categorias as $categoria) { // Este é o loop que itera sobre cada categoria
            echo "<p>" . htmlspecialchars($categoria['id']) . htmlspecialchars($categoria['nome']) . "</p>";
        }
        echo "</div>";

    } else {
        echo "<p>Nenhuma categoria encontrada no banco de dados.</p>";
    }

    
    $stmt->close(); // Fecha o statement preparado
    $conn->close();
?>