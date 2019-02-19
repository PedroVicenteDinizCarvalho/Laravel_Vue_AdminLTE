@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
      <painel titulo="Lista de Artigos">
      	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        
        <tabela-lista 
        	v-bind:titulos="['#', 'Titulo', 'Descrição']"
        	v-bind:itens="{{$listaArtigos}}"
        	criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="788877878"
        	ordem="asc" ordemCol="1"	
          modal="sim"
        ></tabela-lista>
      </painel>
    </pagina>

    <modal nome="adicionar" titulo="Adicionar">
        <formulario css="" action="#" method="put" enctype="" token="">
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="titulo do artigo" name="titulo">
          </div>
          <div class="form-group">
            <label for="decricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="descrição do artigos" name="descricao">
          </div>
          <button type="button" class="btn btn-primary">Salvar</button>
        </formulario>
    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario css="" action="#" method="put" enctype="" token="">
          <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="titulo do artigo" name="titulo">
          </div>
          <div class="form-group">
            <label for="decricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="descrição do artigos" name="descricao">
          </div>
          <button type="button" class="btn btn-primary">Atualizar</button>
        </formulario>
    </modal>
@endsection