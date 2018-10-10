
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Import Buefy CSS for Vue/Frontend
import Buefy from 'buefy'
import 'buefy/lib/buefy.css'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('quiz-content', require('./components/QuizContent.vue'));
Vue.component('statistics', require('./components/QuizStats.vue'));

// Initialize Buefy CSS Library
Vue.use(Buefy);

// Initialize Vue Components
const app = new Vue({
    el: '#app'
});
