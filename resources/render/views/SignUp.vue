<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <sign-up-card/>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import SignUpCard from '../components/SignUpCard';

  export default {
    components: {
      SignUpCard
    },
    async beforeMount() {
      await this.$store.dispatch('signUp/restart');
    }
  };
</script>

<style scoped lang="scss">

</style>
