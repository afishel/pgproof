import Vue from 'vue'
import Vuex from 'vuex'
import inspections from './modules/inspections'
import menu from './modules/menu'

Vue.use(Vuex)

let networkTimer

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
      const onLine = window.navigator.onLine
      if (onLine) {
        clearTimeout(networkTimer)
        commit('SET_NETWORK_STATUS', false)
      } else {
        networkTimer = setTimeout(() => {
          commit('SET_NETWORK_STATUS', true)
        }, 3000);
      }
    }
  }
})

export default store
