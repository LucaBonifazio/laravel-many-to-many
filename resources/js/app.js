/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('bootstrap');

//window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });


const eleOverlay = document.querySelector('.overlay');

if (eleOverlay) {
    const btnsDelete = document.querySelectorAll('.btn_delete');
    btnsDelete.forEach(btn => {
        btn.addEventListener('click', function () {
            eleOverlay.classList.remove('d-none');
            baseUrl = 'http://localhost:8000/admin/';
            if (eleOverlay.querySelector('form').classList.contains('post')) {
                baseUrl += 'posts/';
            } else if (eleOverlay.querySelector('form').classList.contains('category')) {
                baseUrl += 'categories/';
            } else if (eleOverlay.querySelector('form').classList.contains('tag')) {
                baseUrl += 'tags/';
            }
            eleOverlay.querySelector('form').setAttribute('action', baseUrl + this.dataset.id);
        })
    })

    const eleBtnClose = eleOverlay.querySelector('.btn_close');

    eleBtnClose.addEventListener('click', function() {
        eleOverlay.classList.add('d-none');
    })
}
