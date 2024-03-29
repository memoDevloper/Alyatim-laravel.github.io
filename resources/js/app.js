import { createApp } from 'vue/dist/vue.esm-bundler';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import memo from './components/Example.vue';
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const app = createApp({
    components: {
        memo,
    },
});


// Make BootstrapVue available throughout your project
app.use(BootstrapVue);

// Optionally install the BootstrapVue icon components plugin
app.use(IconsPlugin);

app.mount('#app');
