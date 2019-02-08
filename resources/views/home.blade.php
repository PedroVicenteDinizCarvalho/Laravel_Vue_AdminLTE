@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <painel titulo="Dashboard">
                    Teste de conteúdo
                    
                    <div class="row">
                       <div class="col-md-4">
                            <caixa quantidade="80" titulo="Artigos" url="#" cor="purple" icone="ion ion-ios-book"></caixa>
                       </div> 

                       <div class="col-md-4">
                            <caixa quantidade="1480" titulo="Usuários" url="#" cor="green" icone="ion ion-person-stalker"></caixa>
                       </div> 

                       <div class="col-md-4">
                            <caixa quantidade="20" titulo="Autores" url="#" cor="red" icone="ion ion-edit"></caixa>
                       </div> 
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
