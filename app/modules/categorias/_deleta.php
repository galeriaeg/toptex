<?php
	
    // 4. Preparação da Consulta SQL (Prepared Statement)
    $sql = "DELETE FROM t_categoria WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // 5. Vinculação do parâmetro
    $stmt->bindParam(':id', $id_categoria_para_excluir, PDO::PARAM_INT);

    // 6. Execução da Consulta
    $stmt->execute();

    // 7. Verificação e Feedback
    if ($stmt->rowCount()) {
        echo "A categoria com ID **{$id_categoria_para_excluir}** foi **excluída** com sucesso!<br>";
    } else {
        echo "Nenhuma categoria foi excluída. Verifique se o ID **{$id_categoria_para_excluir}** existe.<br>";
    }
?>