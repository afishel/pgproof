import axios from 'axios'

const _orderBy = require('lodash.orderby')
const _reject = require('lodash.reject')
const itemsPerPage = 15

function getOfflineInspections(query) {
  return new Promise((resolve, reject) => {
    let current_page = query.page
    const orderby = query.orderby ? query.orderby.split(':') : ['scheduled_at', 'desc'];
    const items = _orderBy(state.saved, orderby[0], orderby[1])
    const last_page = Math.ceil(items.length / itemsPerPage)

    if (current_page > last_page) {
      current_page = last_page
    }

    const from = itemsPerPage * (current_page - 1)
    const to = itemsPerPage * current_page

    resolve({
      current_page,
      last_page,
      from,
      to,
      total: items.length,
      data: items.slice(from, to)
    })
  })
}

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
    orderby: 'scheduled_at:desc',
  },
  saved: [],
}

const getters = {
}

const mutations = {
  DOWNLOAD_INSPECTION(state, payload) {
    state.saved.push(payload)
  },

  REMOVE_INSPECTION(state, payload) {
    state.saved = _reject(state.saved, { id: payload })
  },

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
  },
}

const actions = {
  getInspections({ state, commit, rootState }) {
    const path = '/api/inspections'
    if (rootState.offline) {
      getOfflineInspections(state.query).then(response => {
        commit('SET_INSPECTIONS', response.data)
        commit('SET_PAGINATION', response)
      })
    } else {
      axios.get(path, { params: state.query }).then(response => {
        if (response.data) {
          commit('SET_INSPECTIONS', response.data.data)
          commit('SET_PAGINATION', response.data)
        }
      }).catch(error => new Error(error))
    }
  },

  goToInspection(id) {
    this.$router.push({ path: 'inspection', params: { id } })
  },

  removeFromStorage({ commit }, id) {
    commit('REMOVE_INSPECTION', id)
  },

  saveToStorage({ commit }, inspection) {
    commit('DOWNLOAD_INSPECTION', inspection)
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
