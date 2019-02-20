<template>
  <div id="container">
    <span id="count">{{count}}</span>
    <button @click="increase(1)">+1</button>
  </div>
</template>

<script>
  export default {
    name: 'home',
    data() {
      return {
        count: this.$store.getters['example/count']
      };
    },
    methods: {
      async increase(count) {
        await this.$store.dispatch('example/increase', count);
        this.count = this.$store.getters['example/count'];
      }
    }
  };
</script>

<style scoped lang="scss">
  #container {

  }
</style>
