import menu from '../../../store/modules/menu'

export default {
  name: 'Navigation',
  data() {
    return {
      menu: menu.state.items,
    }
  },
  methods: {
    isActive(item) {
      return this.$store.state.route.path === item.path
    },
  },
}
