<template>
	<div>
		<a class="btn btn-outline-primary" href="#">Criar</a>
        <table class="table table-hover table-dark">
          	<thead>
          		<tr>
          			<th v-for="titulo in titulos">{{ titulo }}</th>
          			<th>Ação</th>
          		</tr>
          	</thead>
          	<tbody>
          		<tr v-for="item in itens">
          			<td v-for="i in item">{{ i }}</td>
          			<td>
          				<a class="btn btn-outline-primary" href="">Editar</a>
          				<a class="btn btn-outline-danger" href="">Excluir</a>
          				<a class="btn btn-outline-light" href="">Ver</a>
          			</td>
          		</tr>
          	</tbody>
        </table>
	</div>
</template>

<script>
	export default{
		props:['titulos', 'itens'],
	}
</script>

<style>
	
</style>