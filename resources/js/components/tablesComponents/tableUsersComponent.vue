<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                Lista de usuarios
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Edad</th>
                    </tr>
                    <tr v-for="(v, i) in usuarios" :key="v.name">
                        <th>{{v.name}}</th>
                        <th>{{v.edad}}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['usuarios'],
        data() {
           return{
            errors: [],
            us:[
                {name:"uriel" , edad: 12},
                {name:"uriel" , edad: 12},
                {name:"uriel" , edad: 12},
                {name:"uriel" , edad: 12},


                ]
           }
        },
        mounted() {
            // console.log('Component mounted.')
        }
    }
</script>
