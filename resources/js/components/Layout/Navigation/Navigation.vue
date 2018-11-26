<template>
  <nav id="app-navigation" class="navigation" role="navigation">
    <a href="/" class="site-branding">
      <img src="#" alt="Logo" width="150" height="150">
    </a>
    <ul class="menu">
      <li v-for="(item, i) in menu" :key="i" v-if="item.meta.isInMenu" class="menu-item" :class="{ 'is-active': isActive(item)  }">
        <router-link :to="{ name: item.name }">
          <i class="menu-item-icon">Icon</i>
          <span class="menu-item-title">{{ item.meta.title }}</span>
        </router-link>
      </li>
    </ul>
  </nav>
</template>

<script src="./Navigation.js"></script>
<style src="./Navigation.scss"></style>
