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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


const BASE_PATH = 'http://localhost/inventorfa/public/';

import axios from 'axios';

const app = new Vue({
    el: '#app',
    methods: {
        addProduct(id){
            let span = event.target.parentNode.childNodes[2];
            if(confirm('Seguro que desea aumentar')) {
                console.log(id);
                axios.post(`${BASE_PATH}addProduct/${id}`)
                    .then(r => {
                        if(r.status == 200) span.innerText = parseInt(span.innerText) + 1;
                    });
            }
        },
        deductProduct(id){
            let span = event.target.parentNode.childNodes[2];
            if(confirm('Seguro que desea reducir')){
                axios.post(`${BASE_PATH}deductProduct/${id}`)
                    .then(r => {
                        if(r.status == 200) if(span.innerText > 0) span.innerText = parseInt(span.innerText) - 1;
                    });
            }
        },
        registerProduct(){
            if(confirm('Seguro que desea hacer este registro')){
                document.querySelector('#register-product').submit();
            }
        }
    }
});
