import lazyLoading from './lazyLoading'

export default {
  name: 'Inspections',
  path: '/inspections',
  component: lazyLoading('Routes/Inspections/Inspections'),
  meta: {
    default: true,
    title: 'Inspections'
  }
}
