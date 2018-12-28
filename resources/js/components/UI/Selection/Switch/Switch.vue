<template>
  <label :for="name">
    <span class="switch">
      <span class="track"></span>
      <span class="thumb">
        <input type="checkbox" :name="name" :id="name" @change="onChange" :checked="value">
      </span>
    </span>
    <span class="label">{{ label }}</span>
  </label>
</template>

<script src="./Switch.js"></script>
