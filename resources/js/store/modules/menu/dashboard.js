import lazyLoading from './lazyLoading'

export default {
  name: 'Dashboard',
  path: '/dashboard',
  component: lazyLoading('Routes/Dashboard/Dashboard'),
  meta: {
    default: true,
    title: 'Dashboard'
  }
}
