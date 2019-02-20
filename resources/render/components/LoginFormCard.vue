<template>
  <v-card class="elevation-12">
    <card-header text="Login" color="primary"/>
    <login-form-card-form/>
    <login-form-card-sns-buttons/>
    <v-divider inset/>
    <link-with-text text="Don't have an account?" url="/signup" urlText="Sign Up"/>
  </v-card>
</template>

<script>
  import CardHeader from './CardHeader';
  import LoginFormCardForm from './LoginFormCardForm';
  import LoginFormCardSnsButtons from './LoginFormCardSNSButtons';
  import LinkWithText from './LinkWithText';

  export default {
    name: 'login-form',
    components: {
      CardHeader,
      LinkWithText,
      LoginFormCardSnsButtons,
      LoginFormCardForm
    }
  };
</script>

<style scoped lang="scss">

</style>
