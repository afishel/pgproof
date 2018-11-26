const state = {
  items: [],
}

const getters = {
  inspections(state) { return state.items }
}

const mutations = {
  SET_INSPECTIONS(state, payload) {
    state.items = payload
  },
}

const actions = {
  getInspections({ commit }) {
    const inspections = [{
      id: '1',
      scheduled_at: '10/8/2018',
      type: 'High Frequency',
      organization: 'Anytown USA',
      site: 'Barb\'s Park',
      inspector: 'Viewer User',
      status: 'Complete',
      recurring: 'No',
      performed_at: '10/8/2018'
    }, {
      id: '2',
      scheduled_at: '9/17/2018',
      type: 'Low Frequency',
      organization: 'Anytown USA',
      site: 'VIG Municipal Park',
      inspector: 'Barb Murphy',
      status: 'Complete',
      recurring: 'No',
      performed_at: '9/17/2018'
    }, {
      id: '3',
      scheduled_at: '9/17/2018',
      type: 'High Frequency',
      organization: 'Anytown USA',
      site: 'VIG Municipal Park',
      inspector: 'Barb Murphy',
      status: 'Complete',
      recurring: 'No',
      performed_at: '9/17/2018'
    }]

    return new Promise(resolve => {
      setTimeout(() => {
        commit('SET_INSPECTIONS', inspections)
        resolve()
      }, 3000);
    })
  },
}

export default {
  state,
  getters,
  mutations,
  actions,
}
