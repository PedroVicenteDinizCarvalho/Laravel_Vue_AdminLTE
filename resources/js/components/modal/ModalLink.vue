<template>
	<div class="">
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
	</div>
</template>

<script>
	export default{
		props: ['tipo', 'nome', 'titulo', 'css']
	}
</script>