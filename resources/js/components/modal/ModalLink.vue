<template>
	<div class="">
		<span v-if="item">
			<button type="button" data-toggle="modal" 
				v-on:click="preencheFormulario()" 
				v-if="!tipo || (tipo != 'button' && tipo != 'link')"   
				v-bind:class="css || 'btn btn-primary'" 
				v-bind:data-target="'#' + nome">
	        	{{titulo}}
	    	</button>

			<button type="button" data-toggle="modal" 
				v-on:click="preencheFormulario()" 
				v-if="tipo == 'button'" 
				v-bind:class="css || 'btn btn-primary'" 
				v-bind:data-target="'#' + nome">
	        	{{titulo}}
	    	</button>

	    	<a href="" data-toggle="modal" 
	    		v-on:click="preencheFormulario()" 
	    		v-if="tipo == 'link'" 
	    		v-bind:class="css || ''" 
	    		v-bind:data-target="'#' + nome">
	    		{{titulo}}
	    	</a>
		</span>

		<span v-if="!item">
			<button v-if="!tipo || (tipo != 'button' && tipo != 'link')" type="button" data-toggle="modal"  
				v-bind:class="css || 'btn btn-primary'" 
				v-bind:data-target="'#' + nome">
	        	{{titulo}}
	    	</button>

			<button v-if="tipo == 'button'"type="button" data-toggle="modal" 
				v-bind:class="css || 'btn btn-primary'" 
				v-bind:data-target="'#' + nome">
	        	{{titulo}}
	    	</button>

	    	<a v-if="tipo == 'link'" href="" data-toggle="modal" 
	    		v-bind:class="css || ''" 
	    		v-bind:data-target="'#' + nome">
	    		{{titulo}}
	    	</a>
		</span>
	</div>
</template>

<script>
	export default{
		props: ['tipo', 'nome', 'titulo', 'css', 'item'],
		
		methods:{
			preencheFormulario: function(){
				this.$store.commit('setItem', this.item);
			}
		}
	}
</script>