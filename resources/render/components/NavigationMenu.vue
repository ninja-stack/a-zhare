<template>
  <div>
    <side-bar/>
    <v-toolbar app fixed clipped-left>
      <v-toolbar-title>{{ name }}</v-toolbar-title>
    </v-toolbar>
  </div>
</template>

<script>
  import SideBar from './SideBar';

  export default {
    components: {
      SideBar
    },
    name: 'navigation-menu',
    props: ['name']
  };
</script>

<style scoped lang="scss">

</style>
