<template>
  <svg :class="'icon icon-'+icon"><use :xlink:href="'#icon-'+icon"></use></svg>
</template>

<script>
export default {
  props: ['icon'],
}
</script>
