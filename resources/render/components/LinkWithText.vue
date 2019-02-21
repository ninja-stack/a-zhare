<template>
  <v-flex xs12>
    <div slot="label" class="pa-3 text-xs-center">
      {{ text }} <router-link :to="url">{{ urlText }}</router-link>
    </div>
  </v-flex>
</template>

<script>
  export default {
    name: 'link-with-text',
    props: [
      'text',
      'url',
      'urlText'
    ]
  };
</script>

<style scoped>

</style>
