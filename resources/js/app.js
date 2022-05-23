require('./bootstrap');

window.Vue = require('vue').default;
window.axios = require("axios");
import Toasted from "vue-toasted";
import ExampleComponent from "./components/ExampleComponent.vue";
import UserComponent from "./components/admin/UserComponent.vue";
import { VuejsDatatableFactory } from 'vuejs-datatable';
Vue.use( VuejsDatatableFactory );
Vue.use(Toasted);

new Vue({
    el: '#app',
    components: {
        ExampleComponent,
        UserComponent
    }
});
