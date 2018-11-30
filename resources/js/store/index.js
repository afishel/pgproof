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
  mutations: {
    SET_NETWORK_STATUS(state, payload) {
      state.offline = payload
    }
  },
  state: {
    offline: false,
  },
  actions: {
    checkNetworkStatus({ commit }) {
      commit('SET_NETWORK_STATUS', !window.navigator.onLine)
    }
  }
})

export default store
