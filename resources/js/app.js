/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
 
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
 
const app = new Vue({
    el: '#app',
    data: {
        types: [],
        loading: false,
        isPushedCharacterType: false,
    },
    methods: {
        fetchTypes: function(id)
        {
            this.types = [];
            this.loading = true;
            axios.get('/api/character_model_types/' + id).then((res)=>{
                this.types = res.data;
                this.loading = false;
                this.isPushedCharacterType = false;
            });
            
        },
        selectType: function()
        {
            this.isPushedCharacterType = true;
        }
    },
    created(){
        // htmlが読み込まれたら行うやつ。
        //this.fetchType(1);
    }
});