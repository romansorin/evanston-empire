require('./bootstrap');
window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

const app = new Vue({
    el: '#app'
});


document.querySelector('.navbar-toggler').addEventListener('click', function () {
    document.querySelector('.navbar-toggler').classList.toggle('is-active');
});
