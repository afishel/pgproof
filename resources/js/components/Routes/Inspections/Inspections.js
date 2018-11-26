import AppHeader from '../../Layout/Header/Header.vue'
import { mapActions, mapGetters } from 'vuex'

export default {
  name: 'Inspections',
  components: {
    AppHeader,
  },
  computed: {
    ...mapGetters([
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
