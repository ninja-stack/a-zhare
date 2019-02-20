<template>
  <v-toolbar dark :color="color">
    <v-toolbar-title>{{ text }}</v-toolbar-title>
  </v-toolbar>
</template>

<script>
  export default {
    name: 'login-form-header',
    props: [
      'text',
      'color'
    ]
  };
</script>

<style scoped lang="scss">

</style>
