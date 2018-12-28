<template>
  <header class="app-header" role="banner">
    <h1 class="header-title">{{ pageTitle }}</h1>
  </header>
</template>

<script>
export default {
  name: 'Header',
  props: {
    pageTitle: String,
  },
}
</script>

<style lang="scss">
  .app-header {
    grid-area: header;
  }
</style>
