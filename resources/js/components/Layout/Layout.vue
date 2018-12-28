<template>
  <div class="layout">
    <navigation></navigation>
    <main id="app-main" class="main" :class="{ 'has-sidebar': hasSidebar }" role="main">
      <router-view></router-view>
      <router-view name="sidebar"></router-view>
    </main>
  </div>
</template>

<script src="./Layout.js"></script>
<style lang="scss" src="./Layout.scss"></style>
