<template>
  <nav id="app-navigation" class="navigation" role="navigation">
    <a href="/" class="site-branding">
      <img src="/images/logo.png" alt="Logo">
    </a>
    <ul class="menu">
      <li v-for="(item, i) in menu" :key="i" v-if="item.meta.isInMenu" class="menu-item" :class="{ 'is-active': isActive(item)  }">
        <router-link :to="{ name: item.name }">
          <icon :icon="item.meta.icon" v-if="item.meta.icon"></icon>
          <span class="menu-item-title">{{ item.meta.title }}</span>
        </router-link>
      </li>
    </ul>
  </nav>
</template>

<script src="./Navigation.js"></script>
<style lang="scss" src="./Navigation.scss"></style>
