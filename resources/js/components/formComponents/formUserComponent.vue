<template>
    <div class="container">

        <div v-if="this.errors.length">
            <b>Por favor, corrija el(los) siguiente(s) error(es):</b>
            <ul>
                <li v-for="error in this.errors">{{ error }}</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>Agrega un Usuario</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <label for="name">Nombre</label>
                <input id="name" v-model="info_user.name" type="text"  name="name"> <br>
                <label for="edad">Edad</label>
                <input id="edad" v-model="info_user.edad" type="text"  name="edad">
                <button class="btn" v-on:click="guardaUser()">Aceptar</button>
            </div>
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
                }
            }
        },
        mounted() {
            // console.log('Component mounted.')
        },
        methods: {
            guardaUser(){
                // console.log('info user!' , this.info_user);
                const info = this.info_user;
                this.$emit('save', info );
            }
        }
    }
</script>
