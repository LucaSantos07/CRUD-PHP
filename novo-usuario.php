<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>

	<div class="mb-3">
		<label>SETOR</label>
		<input type="txt" name="setor" class="form-control">
	</div>

		<div class="mb-3">
			<button type="submit" class="btn btn-primary">ENVIAR</button>
		</div>
</form>