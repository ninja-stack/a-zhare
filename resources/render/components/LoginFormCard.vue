<template>
  <v-card class="elevation-12">
    <login-form-header text="Login" color="primary"/>
    <login-form-card-form/>
    <login-form-card-sns-buttons/>
    <v-divider inset/>
    <login-form-card-register-link text="Don't have an account?" url="/signup" urlText="Sign Up"/>
  </v-card>
</template>

<script>
  import LoginFormHeader from './LoginFormCardHeader';
  import LoginFormCardForm from './LoginFormCardForm';
  import LoginFormCardFacebookButton from './LoginFormCardFacebookButton';
  import LoginFormCardGoogleButton from './LoginFormCardGoogleButton';
  import LoginFormCardTwitterButton from './LoginFormCardTwitterButton';
  import LoginFormCardSnsButtons from './LoginFormCardSNSButtons';
  import LoginFormCardRegisterLink from './LoginFormCardRegisterLink';

  export default {
    name: 'login-form',
    components: {
      LoginFormCardRegisterLink,
      LoginFormCardSnsButtons,
      LoginFormCardTwitterButton,
      LoginFormCardGoogleButton,
      LoginFormCardFacebookButton,
      LoginFormCardForm,
      LoginFormHeader,
    }
  };
</script>

<style scoped lang="scss">

</style>
