@extends('layouts.app')

@section('content')
    <pagina tamanho="4">
      <painel titulo="Dashboard">
          <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
          <div class="row">
             <div class="col-md-4">
                  <caixa quantidade="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="purple" icone="ion ion-ios-book"></caixa>
             </div> 

             <div class="col-md-4">
                  <caixa quantidade="1480" titulo="Usuários" url="#" cor="green" icone="ion ion-person-stalker"></caixa>
             </div> 

             <div class="col-md-4">
                  <caixa quantidade="20" titulo="Autores" url="#" cor="red" icone="ion ion-edit"></caixa>
             </div> 
          </div>
      </painel>
    </pagina>
@endsection
