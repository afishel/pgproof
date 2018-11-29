import lazyLoading from './lazyLoading'

export default {
  name: 'Dashboard',
  path: '/dashboard',
  components: {
    default: lazyLoading('Routes/Dashboard/Dashboard'),
  },
  meta: {
    default: true,
    title: 'Dashboard',
    isInMenu: true,
    hasSidebar: false,
    icon: 'dashboard',
  }
}
