export default {
  props: [
    'name',
    'label',
    'value',
  ],
  methods: {
    onChange(e) {
      this.$emit('input', e.target.checked)
    }
  }
}
