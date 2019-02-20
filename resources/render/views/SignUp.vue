<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <signup-form/>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import SignupForm from '../components/SignupFormCard';
  export default {
    components: {SignupForm}
  };
</script>

<style scoped lang="scss">

</style>
