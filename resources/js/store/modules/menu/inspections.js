import lazyLoading from './lazyLoading'

export default {
  name: 'Inspections',
  path: '/inspections',
  components: {
    default: lazyLoading('Routes/Inspections/Inspections'),
    sidebar: lazyLoading('Routes/Inspections/InspectionsSidebar'),
  },
  meta: {
    default: true,
    title: 'Inspections',
    isInMenu: true,
    hasSidebar: true,
  }
}
