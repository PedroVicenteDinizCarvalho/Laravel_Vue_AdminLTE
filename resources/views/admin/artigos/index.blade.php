@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
      <painel titulo="Lista de Artigos">
        <tabela-lista 
        	v-bind:titulos="['#', 'Titulo', 'Descrição', 'Autor']"
        	v-bind:itens="[[1, 'PHP OO', 'Curso de PHP Orientado a Objetos', 'Pedro Vicente'], [2, 'VUE js', 'Curso de Vue Js', 'Pedro Vicente']]"
        	criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="788877878"
        	ordem="asc" ordemCol="1"	
        ></tabela-lista>
      </painel>
    </pagina>
@endsection