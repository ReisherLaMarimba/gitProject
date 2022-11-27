<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">APP SIN USUARIO</div>

                    <div class="card-body">
                       APP SIN USUARIO2
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('Inicializada')
        }
    }

    
var app = new Vue({
    el: '#app',
    data: {
        all_data:[]
    },
    created: function(){
        console.log("Iniciando...");
        this.get_contacts();
    },
    methods:{
        get_contacts: function(){
            fetch("./peliculas/mostrar.php")
            .then(response=>response.json())
            .then(json=>{this.all_data=json.contactos})
        }
    }
})

</script>
