@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <painel titulo="Dashboard">
                    Teste de conteúdo
                    
                    <div class="row">
                       <div class="col-md-4">
                            <painel titulo="Conteúdo 1" cor="purple">
                                Teste de conteúdo
                            </painel>
                       </div> 

                       <div class="col-md-4">
                            <painel titulo="Conteúdo 2" cor="green">
                                Teste de conteúdo
                            </painel>
                       </div> 

                       <div class="col-md-4">
                            <painel titulo="Conteúdo 3" cor="dark">
                                Teste de conteúdo
                            </painel>
                       </div> 
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
