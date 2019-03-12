<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <login-card/>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  import LoginCard from '../components/LoginCard';

  export default {
    components: {
      LoginCard
    },
    async beforeMount() {
      await this.$store.dispatch('login/restart');
    }
  };
</script>

<style scoped lang="scss">

</style>
