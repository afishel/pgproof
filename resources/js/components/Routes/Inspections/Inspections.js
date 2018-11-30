import AppHeader from '../../Layout/Header/Header.vue'
import { mapActions, mapState } from 'vuex'

const _debounce = require('lodash.debounce')
const _find = require('lodash.find')

export default {
  name: 'Inspections',
  components: {
    AppHeader,
  },
  computed: {
    ...mapState('inspections', [
      'items',
      'pagination',
      'saved',
    ]),
    title() {
      return this.$store.state.route.name
    },
  },
  methods: {
    ...mapActions('inspections', [
      'getInspections',
      'saveToStorage',
      'updateQuery',
    ]),

    checkSaved(id) {
      const inspection = _find(this.saved, { id })
      return inspection
    },

    downloadInspection(inspection) {
      this.saveToStorage(inspection)
    },

    sortBy: function (column) {
      this.updateQuery({ orderby: column + ':asc' })
    },

    toPage: _debounce(function(page = 1) {
      this.updateQuery({ page })
    }, 800, this)
  },
  mounted() {
    this.getInspections()
  },
}
