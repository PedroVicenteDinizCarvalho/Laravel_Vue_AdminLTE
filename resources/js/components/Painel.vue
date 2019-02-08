<template>
    <div v-bind:class="defineCor">
        <div class="card-header">{{titulo}}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'cor'],
        computed:{
        	defineCor: function(){
        		return "card "+ (this.cor || "bg-light");
        	}
        }
    }
</script>

<style>
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.50rem;
}

.red {
    background-color: #de2911 !important;
    color: #e9ecef !important;
}
.purple {
    background-color: #990aac !important;
    color: #e9ecef !important;
}
.green {
    background-color: #0dac44 !important;
    color: #e9ecef !important;
}
</style>