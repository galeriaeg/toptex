<?php include "session.php"; ?>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<select class="mdl-textfield__input" type="select" onchange="buscar(this.value)" name="categoria" id="sample1">
		<option selected disabled>Selecione um tipo de malha</option>
		<?php
			$sql = "SELECT * FROM t_categoria WHERE status = 1";
			$res = mysqli_query($conn, $sql);
			$totalPath = mysqli_num_rows($res);
			while ($row = mysqli_fetch_array($res)){
				$categoria_id	=	$row['id'];
				$categoria_nome	=	$row['nome'];
				
				echo "<option value='$categoria_id'>$categoria_nome</option>";
			}
		?>
	</select>
	<label class="mdl-textfield__label" for="sample1">Categoria</label>
	
	<section style="display:block" class="box-tag-filtro">
		<span class="mdl-chip mdl-chip--deletable">
			<span class="mdl-chip__text">Deletable Chip</span>
			<button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
		</span>
	</section>
	
</div>