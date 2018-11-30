import AppHeader from '../../Layout/Header/Header.vue'
import { mapActions, mapState } from 'vuex'

const debounce = require('lodash.debounce')

export default {
  name: 'Inspections',
  components: {
    AppHeader,
  },
  computed: {
    ...mapState([
      'inspections',
    ]),
    title() {
      return this.$store.state.route.name
    },
  },
  methods: {
    ...mapActions('inspections', [
      'getInspections',
      'updateQuery'
    ]),

    toPage: debounce(function(page = 1) {
      this.updateQuery({ page })
    }, 800, this)
  },
  mounted() {
    this.getInspections()
  },
}
