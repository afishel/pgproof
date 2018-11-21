<template>
  <div class="page">
    <nav id="app-navigation" class="navigation" role="navigation">
      <a href="/" class="site-branding">
        <img src="#" alt="Logo" width="150" height="150">
      </a>
      <ul>
        <li>
          <router-link :to="{ name: 'Dashboard' }">Dashboard</router-link>
        </li>
        <li>
          <router-link :to="{ name: 'Inspections' }">Inspections</router-link>
        </li>
      </ul>
    </nav>
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
