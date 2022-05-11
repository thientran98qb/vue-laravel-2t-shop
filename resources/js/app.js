require('./bootstrap');

window.Vue = require('vue').default;
window.axios = require("axios");

import ExampleComponent from "./components/ExampleComponent.vue";
import UserComponent from "./components/admin/UserComponent.vue";

new Vue({
    el: '#app',
    components: {
        ExampleComponent,
        UserComponent
    }
});
