<template>
	<div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                              <a v-if="criar" class="btn btn-outline-primary" v-bind:href="criar">Criar</a>
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
          			<th v-for="titulo in titulos">{{ titulo }}</th>
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
                                   <a v-if="editar" class="btn btn-outline-primary" v-bind:href="editar">Editar</a>
                                   <a v-if="detalhe" class="btn btn-outline-light" v-bind:href="detalhe">Detalhe</a>

                                   <a class="btn btn-outline-danger" href="#" v-on:click="executaForm(index)">Deletar</a>
                              </form>

                              <span v-if="!token">
                                   <a v-if="editar" v-bind:href="editar">Editar</a>
                                   <a v-if="detalhe" v-bind:href="detalhe">Detalhe</a>
                                   <a v-if="deletar" v-bind:href="deletar">Deletar</a>
                              </span>

                              <span v-if="token && !deletar">
                                   <a v-if="editar" v-bind:href="editar">Editar</a>
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
		props:['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token'],
          data: function(){
               return {
                    buscar: '',
               }
          },
          methods:{
               executaForm: function(index){
                    document.getElementById('id').submit();
               },
          },
          computed:{
               lista:function(){
                    return this.itens.filter(res => {
                         for(let k = 0; k < res.length; k++){
                              if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                                   return true;
                              }  
                         }
                         return false;
                    });
               }
          }
	}
</script>

<style>
	
</style>