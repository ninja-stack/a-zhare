<template>
  <div>
    <sidebar></sidebar>
    <v-toolbar app fixed clipped-left>
      <v-toolbar-title>Application</v-toolbar-title>
    </v-toolbar>
  </div>
</template>

<script>
  import Sidebar from '../components/Sidebar';
  export default {
     components: {
      Sidebar
    },
    name: 'navigation-menu',
    props: [
    ]
  };
</script>

<style scoped lang="scss">

</style>