<template>
  <v-card-actions>
    <login-card-facebook-button/>
    <login-card-google-button/>
    <login-card-twitter-button/>
  </v-card-actions>
</template>

<script>
  import LoginCardFacebookButton from './LoginCardFacebookButton';
  import LoginCardGoogleButton from './LoginCardGoogleButton';
  import LoginCardTwitterButton from './LoginCardTwitterButton';

  export default {
    name: 'login-card-sns-buttons',
    components: {
      LoginCardFacebookButton,
      LoginCardGoogleButton,
      LoginCardTwitterButton
    }
  };
</script>

<style scoped>

</style>
