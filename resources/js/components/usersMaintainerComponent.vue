<template>
    <div class="row">
        <div class="col-6">
            <!-- FORMULARIO PARA AGREGAR USUARIOS -->
            <form-user-c @save="addNewUser"></form-user-c>
        </div>
        <div class="col-6">
            <!-- TABLA DE EDITAR USUARIOS -->
            <table-users-c v-bind:usuarios="this.usuarios" ></table-users-c>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                errors: [],
                info_user:{
                    name:null,
                    edad:null
                },
                usuarios:[]
            }
        },
        mounted() {
            // console.log('Component mounted.')
        },
        methods: {
            addNewUser(user){
                const usuario = {
                    name : user.name,
                    edad : user.edad
                }
                this.usuarios.push(usuario);

            }
        }
    }
</script>
