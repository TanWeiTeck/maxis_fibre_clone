/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue").default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

Vue.component("maxisheader", require("./components/Header.vue").default);
Vue.component(
    "maxisheaderapply",
    require("./components/Headerapply.vue").default
);
Vue.component("maxismenu", require("./components/Menu.vue").default);
Vue.component("maxisservice", require("./components/Service.vue").default);
Vue.component("maxispros", require("./components/Pros.vue").default);
Vue.component("maxisfibre", require("./components/Fibreplan.vue").default);
Vue.component("maxispros2", require("./components/Pros2.vue").default);
Vue.component("maxisfooter", require("./components/Footer.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
});
