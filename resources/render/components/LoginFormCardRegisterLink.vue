<template>
  <v-flex xs12>
    <div slot="label" class="pa-3 text-xs-center">
      {{ text }} <a :href="url">{{ urlText }}</a>
    </div>
  </v-flex>
</template>

<script>
  export default {
    name: 'LoginFormCardRegisterLink',
    props: [
      'text',
      'url',
      'urlText'
    ]
  };
</script>

<style scoped>

</style>
