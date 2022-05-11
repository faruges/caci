require('./bootstrap');

import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/inertia-vue3';
import {InertiaProgress} from '@inertiajs/progress';
import DKToast from 'vue-dk-toast';
import vSelect from 'vue-select'
import 'vue-select/dist/vue-select.css';

import axios from 'axios';
import VueAxios from 'vue-axios';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({el, app, props, plugin}) {
        return createApp({render: () => h(app, props)})
            .use(plugin)
            .use(DKToast)
            .use(VueAxios, axios)
            // .provide('axios', app.config.globalProperties.axios)
            .component('v-select', vSelect)
            .mixin({methods: {route}})
            .mount(el);
    },
});

InertiaProgress.init({color: '#4B5563'});
