<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <login-form/>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import LoginForm from '../components/LoginFormCard';

  export default {
    components: {
      LoginForm
    }
  };
</script>

<style scoped lang="scss">

</style>
