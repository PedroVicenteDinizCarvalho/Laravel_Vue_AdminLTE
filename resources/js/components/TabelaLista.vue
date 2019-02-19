<template>
	<div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                              <a v-if="criar && !modal" v-bind:href="criar">Criar</a>
                              <modal-link v-if="criar && modal" tipo="button" nome="adicionar" titulo="criar" css=""></modal-link>
                         </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                         <input type="search" class="form-control mr-sm-2" placeholder="Buscar" v-model="buscar">
                    </form>
               </div>
          </nav>

          <table class="table table-hover table-dark">
          	<thead>
          		<tr>
          			<th style="cursor: pointer" v-on:click="ordenaColuna(index)" v-for="(titulo, index) in titulos">{{ titulo }}</th>
          			<th v-if="detalhe || editar || deletar">Ação</th>
          		</tr>
          	</thead>
          	<tbody>
          		<tr v-for="(item, index) in lista">
          			<td v-for="i in item">{{ i }}</td>
          			<td v-if="detalhe || editar || deletar">
                              <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                                   <input type="hidden" name="_method" value="DELETE">
                                   <input type="hidden" name="_token" v-bind:value="token">

                                   <a v-if="editar && !modal" class="btn btn-outline-primary" v-bind:href="editar">Editar</a>
                                   <modal-link v-if="editar && modal" tipo="button" nome="editar" titulo="Editar" css="" v-bind:item="item"></modal-link>

                                   <a v-if="detalhe" class="btn btn-outline-light" v-bind:href="detalhe">Detalhe</a>

                                   <a class="btn btn-outline-danger" href="#" v-on:click="executaForm(index)">Deletar</a>
                              </form>

                              <span v-if="!token">
                                   <a v-if="editar && !modal" v-bind:href="editar">Editar</a>
                                   <modal-link v-if="editar && modal" tipo="button" nome="editar" titulo="Editar" css=""></modal-link>

                                   <a v-if="detalhe" v-bind:href="detalhe">Detalhe</a>
                                   <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                              </span>

                              <span v-if="token && !deletar">
                                   <a v-if="editar && !modal" v-bind:href="editar">Editar</a>
                                   <modal-link v-if="editar && modal" tipo="button" nome="editar" titulo="Editar" css=""></modal-link>

                                   <a v-if="detalhe" v-bind:href="detalhe">Detalhe</a>
                              </span>
          			</td>
          		</tr>
          	</tbody>
          </table>
	</div>
</template>

<script>
	export default{
		props:['titulos', 'itens', 'ordem', 'ordemCol', 'criar', 'detalhe', 'editar', 'deletar', 'token', 'modal'],

          data: function(){
               return {
                    buscar: '',
                    ordemAux: this.ordem || "asc",
                    ordemAuxCol: this.ordemCol || 0,
               }
          },

          methods:{
               executaForm: function(index){
                    document.getElementById('id').submit();
               },

               ordenaColuna: function(coluna){
                    this.ordemAuxCol = coluna;
                    if(this.ordemAux == "asc"){
                         this.ordemAux = "desc";
                    }else{
                         this.ordemAux = "asc";
                    }
               },
          },
          
          computed:{
               lista:function(){

                    let ordem = this.ordemAux;
                    let ordemCol = this.ordemAuxCol;
                    ordem = ordem.toLowerCase();
                    ordemCol = parseInt(ordemCol);

                    if(ordem == "asc"){
                         this.itens.sort(function(a, b){
                              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return 1; }
                              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return -1; }
                              return 0;
                         });
                    }else{
                         this.itens.sort(function(a, b){
                              if (Object.values(a)[ordemCol] < Object.values(b)[ordemCol] ) { return 1; }
                              if (Object.values(a)[ordemCol] > Object.values(b)[ordemCol] ) { return -1; }
                              return 0;
                         });
                    }

                    if(this.buscar){
                         return this.itens.filter(res => {
                              for(let k = 0; k < res.length; k++){
                                   if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                                        return true;
                                   }  
                              }
                              return false;
                         });
                    } 

                    return this.itens;
               },
          }
	}
</script>

<style>
	
</style>