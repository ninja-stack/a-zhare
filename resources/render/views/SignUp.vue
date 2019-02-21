<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <sign-up-form/>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import SignUpForm from '../components/SignUpFormCard';

  export default {
    components: {SignUpForm}
  };
</script>

<style scoped lang="scss">

</style>
