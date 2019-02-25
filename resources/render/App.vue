<template>
  <v-app id="app">
    <v-fade-transition mode="out-in">
      <router-view></router-view>
    </v-fade-transition>
  </v-app>
</template>

<script>
  export default {
    name: 'app',
  };
</script>

<style scoped lang="scss">

</style>
