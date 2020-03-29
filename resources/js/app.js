import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './App.vue'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import router from './router.js'
import Event from './components/Event.vue'
import Vuelidate from 'vuelidate'
import VuelidateErrorExtractor, { templates } from "vuelidate-error-extractor";

Vue.use(BootstrapVue)
Vue.use(VueRouter)
Vue.use(Vuelidate)
Vue.use(VuelidateErrorExtractor, {
    i18n: false,
    messages: {
      required: "{attribute} tidak boleh kosong!",
      notPhone: "{attribute} isi sesuai format telepon Indonesia!",
      email: "{attribute} email tidak benar!.",
      isEmailAvailable:
        "{attribute} is not available. Must be at least 10 characters long."
    }
  });

  Vue.component("form-group", templates.singleErrorExtractor.foundation6);

const app = new Vue({
    el:'#wp',
    router,
    components:{
        App
    }
})
