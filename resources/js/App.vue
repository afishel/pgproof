<template>
  <div id="app" class="app">
    <layout></layout>
    <div v-if="offline">Offline</div>
  </div>
</template>

<script>
import Layout from './components/Layout/Layout.vue'
import { mapState } from 'vuex'

export default {
  name: 'app',
  computed: {
    ...mapState([
      'offline'
    ])
  },
  components: {
    Layout,
  },
}
</script>
