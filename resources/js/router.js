import Vue from 'vue'
import Router from 'vue-router'
import store from './store.js'
import Home from './pages/Home.vue'

Vue.use(Router)

const router = new Router({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: Home

        }
    ]
})
export default router