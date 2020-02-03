/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
// window.Vue = require("vue");
window.EventBus = new Vue();

// window.EventBus = new Vue();
// export const EventBus = new Vue();

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
    "multimediadata",
    require("./components/user/multimedia.vue").default
); //component name should be in camel-case

Vue.component(
    "about-component",
    require("./components/user/about.vue").default
);

Vue.component("addMulti", require("./components/adm/addMulti.vue").default);

Vue.component(
    "editnoticia",
    require("./components/adm/editnoticia.vue").default
);

Vue.component(
    "editAcciones",
    require("./components/adm/editAcciones.vue").default
);

Vue.component(
    "mostrelevantsection-component",
    require("./components/user/recentsection.vue").default
);

Vue.component(
    "mostrelevantsection-component",
    require("./components/user/mostrelevantsection.vue").default
);

Vue.component(
    "pdfview-component",
    require("./components/user/pdfView.vue").default
);

Vue.component(
    "newview-component",
    require("./components/user/newView.vue").default
);

Vue.component(
    "actionview-component",
    require("./components/user/actionView.vue").default
);

Vue.component(
    "searchview-component",
    require("./components/user/searchComponent.vue").default
);

Vue.component(
    "example-component",
    require("./components/adm/ExampleComponent.vue").default
);

Vue.component(
    "addInformation",
    require("./components/adm/addInformation.vue").default
);
Vue.component(
    "addDocument",
    require("./components/adm/addDocument.vue").default
);

Vue.component("addAction", require("./components/adm/addAction.vue").default);

Vue.component("addNoticia", require("./components/adm/addNoticia.vue").default);

Vue.component(
    "addRegister",
    require("./components/adm/addRegister.vue").default
);
Vue.component("addpdf", require("./components/adm/addpdf.vue").default);

Vue.component("app-component", require("./components/user/app.vue").default);
Vue.component(
    "viewdoc-component",
    require("./components/user/documentView.vue").default
);

Vue.component(
    "popularPost",
    require("./components/adm/popularPost.vue").default
);

Vue.component(
    "documentView",
    require("./components/user/documentView.vue").default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
