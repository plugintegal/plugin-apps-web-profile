import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from './router.js'
import Event from './components/Event.vue'


Vue.use(BootstrapVue)
Vue.use(VueRouter)



const app = new Vue({
    el:'#wp',
    router,
    components:{
        App
    }
})
