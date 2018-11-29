import AppHeader from '../../Layout/Header/Header.vue'
import { mapActions, mapState } from 'vuex'

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
    ...mapActions([
      'getInspections',
    ]),
  },
  mounted() {
    this.getInspections()
  },
}
