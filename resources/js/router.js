import Vue from 'vue'
import Router from 'vue-router'
import App from '../js/App.vue'
import Event from './components/Event.vue'
import Regis from './components/Regis.vue'


Vue.use(Router)

const router = new Router({
    mode: 'history', //agar tidak usah muter/tanpa refresh kembali ke halaman
    routes: [
        {
            path: '/',      //slase halaman localhost
            name: 'app',    //yang di akan di panggil routing
            component: App
        },
        {
            path: '/event/:id',
            name: 'event',
            component: Event
        },
        {
            path: '/regis',
            name: 'regis',
            component: Regis

        }

    ]
});


export default router           //eksport ke app.js