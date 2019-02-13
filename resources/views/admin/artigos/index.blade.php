@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
      <painel titulo="Lista de Artigos">
        <tabela-lista 
        	v-bind:titulos="['#', 'titulo', 'Descrição', 'Autor', 'Data']"
        	v-bind:itens="[[1, 'PHP OO', 'Curso de PHP Orientado a Objetos', 'Pedro Vicente', '13/02/2019'], [2, 'VUE js', 'Curso de Vue Js', 'Pedro Vicente', '13/02/2019']]"		
        ></tabela-lista>
      </painel>
    </pagina>
@endsection