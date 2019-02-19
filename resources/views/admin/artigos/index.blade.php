@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
      <painel titulo="Lista de Artigos">
      	<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        
        <tabela-lista 
        	v-bind:titulos="['#', 'Titulo', 'Descrição', 'Autor']"
        	v-bind:itens="[[1, 'PHP OO', 'Curso de PHP Orientado a Objetos', 'Pedro Vicente'], [2, 'VUE js', 'Curso de Vue Js', 'Pedro Vicente']]"
        	criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="788877878"
        	ordem="asc" ordemCol="1"	
        ></tabela-lista>
      </painel>
    </pagina>
    <modal nome="meuModalTeste" titulo="Adicionar">
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>
    </modal>
@endsection