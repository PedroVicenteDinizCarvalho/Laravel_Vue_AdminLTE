@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
      <painel titulo="Lista de Artigos">
          <a class="btn btn-outline-primary" href="#">Criar</a>
          <table class="table table-hover table-dark">
          	<thead>
          		<tr>
          			<th>#</th>
          			<th>Titulo</th>
          			<th>Descrição</th>
          			<th>Autor</th>
          			<th>Data</th>
          			<th>Ação</th>
          		</tr>
          	</thead>
          	<tbody>
          		<tr>
          			<td>1</td>
          			<td>Titulo ...</td>
          			<td>Descrição</td>
          			<td>Nome do Autor</td>
          			<td>Data ....</td>
          			<td>
          				<a class="btn btn-outline-primary" href="">Editar</a>
          				<a class="btn btn-outline-danger" href="">Excluir</a>
          				<a class="btn btn-outline-light" href="">Ver</a>
          			</td>
          		</tr>
          	</tbody>
          </table>
      </painel>
    </pagina>
@endsection