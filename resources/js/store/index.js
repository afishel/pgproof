import Vue from 'vue'
import Vuex from 'vuex'
import inspections from './modules/inspections'
import menu from './modules/menu'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    inspections,
    menu,
  },
  mutations: {},
  state: {},

})

export default store
