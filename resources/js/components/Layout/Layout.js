import Navigation from "./Navigation/Navigation.vue"

export default {
  components: {
    Navigation,
  },
  methods: {
    hasSidebar() {
      return this.$store.state.route.meta.hasSidebar
    }
  },
}
