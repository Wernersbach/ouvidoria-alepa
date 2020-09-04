<main class="center" id="container-acompanhamento">
	<div class="box center row">
		<h2 class="texto center" id="titulo-manifestacao">Acompanhar manifestação</h2>

		<!--Formulário de busca de manifestação-->
		<form id="form-acompanhamento" class="center row">
			<p class="texto">Busque pelo seu código de acesso ou pelo seu CPF</p>
			<div class="container-in-cbox">
				<select class="in-select">
					<option>CPF</option>
					<option>CÓDIGO</option>
				</select>
				<input class="input-cbox" type="text" placeholder="Digite o seu CPF">
			</div>
			<input class="btn" type="submit" value="Acompanhar">
		</form>

		<!--Tabela de manifestações-->
		<table>
			<b id="titulo2-manifestacao" class="texto">Manifestações</b>
			<thead>
				<tr>
					<th class="texto">Abertura</th>
					<th class="texto">Tipo</th>
					<th class="texto">Status</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</main>