require('./bootstrap');
// window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify';
import Vuex from 'vuex';
import 'es6-promise/auto';


Vue.use(Vuetify);
Vue.use(Vuex);



// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('form-local-component', require('./components/formLocalesComponent.vue').default);

// MANTENEDORES
Vue.component('users-maintainer-c', require('./components/usersMaintainerComponent.vue').default);

// FORMS
Vue.component('form-user-c', require('./components/formComponents/formUserComponent.vue').default);

// TABLAS
Vue.component('table-users-c', require('./components/tablesComponents/tableUsersComponent.vue').default);

const store = new Vuex.Store({
    state:{
        numero : 10
    }
});

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    store: store
});

export default app;
