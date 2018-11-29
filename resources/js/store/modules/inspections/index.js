import axios from 'axios'

const state = {
  items: [],
  pagination: {
    current_page: 1,
    last_page: 1,
    from: 1,
    to: 1,
    total: 0,
  },
  query: {
    page: 1,
  }
}

const getters = {
}

const mutations = {
  SET_INSPECTIONS(state, payload) {
    state.items = payload
  },

  SET_PAGINATION(state, payload) {
    state.pagination = {
      current_page: payload.current_page,
      last_page: payload.last_page,
      from: payload.from,
      to: payload.to,
      total: payload.total,
    }
  },
  SET_QUERY(state, payload) {
    state.query = Object.assign(state.query, payload)
  }
}

const actions = {
  getInspections({ state, commit }) {
    const path = '/api/inspections'
    axios.get(path, { params: state.query }).then(response => {
      if (response.data) {
        commit('SET_INSPECTIONS', response.data.data)
        commit('SET_PAGINATION', response.data)
      }
    }).catch(error => new Error(error))
  },

  updateQuery({ dispatch, commit }, query) {
    commit('SET_QUERY', query)
    dispatch('getInspections')
  },
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}
