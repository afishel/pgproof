<template>
  <div class="page">
    <header id="app-header" class="banner" role="banner">
      <h1>PGProof</h1>
    </header>
    <main id="app-main" class="main" role="main">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Layout Mounted');
  }
}
</script>
