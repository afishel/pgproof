import { mapActions, mapState } from 'vuex'

export default {
  name: 'InspectionsSidebar',
  computed: {
    ...mapState(['offline']),
  },
  data: function() {
    return {
      downloadedOnly: false,
    }
  },
  methods: {
    ...mapActions('inspections', [
      'updateQuery',
    ]),
  },
}
