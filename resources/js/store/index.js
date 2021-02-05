import Vuex from 'vuex'
import Vue from 'vue'
Vue.use(Vuex)

import User from "./modules/UserLoggin.js"

export default new Vuex.Store({
    modules:{
        User
    }
})
