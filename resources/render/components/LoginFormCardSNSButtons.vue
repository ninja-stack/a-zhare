<template>
  <v-card-actions>
    <login-form-card-facebook-button/>
    <login-form-card-google-button/>
    <login-form-card-twitter-button/>
  </v-card-actions>
</template>

<script>
  import LoginFormCardFacebookButton from './LoginFormCardFacebookButton';
  import LoginFormCardGoogleButton from './LoginFormCardGoogleButton';
  import LoginFormCardTwitterButton from './LoginFormCardTwitterButton';

  export default {
    name: 'login-form-card-sns-buttons',
    components: {
      LoginFormCardTwitterButton,
      LoginFormCardGoogleButton, LoginFormCardFacebookButton}
  };
</script>

<style scoped>

</style>
