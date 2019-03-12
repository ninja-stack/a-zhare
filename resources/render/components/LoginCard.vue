<template>
  <v-card class="elevation-12">
    <card-header text="Login" color="primary"/>
    <login-card-form/>
    <login-card-sns-buttons/>
    <v-divider inset/>
    <link-with-text
      text="Don't have an account?"
      url="/signup"
      urlText="Sign Up"
    />
  </v-card>
</template>

<script>
  import CardHeader from './CardHeader';
  import LoginCardSnsButtons from './LoginCardSNSButtons';
  import LinkWithText from './LinkWithText';
  import LoginCardForm from './LoginCardForm';

  export default {
    name: 'login-card',
    components: {
      CardHeader,
      LinkWithText,
      LoginCardSnsButtons,
      LoginCardForm
    }
  };
</script>

<style scoped lang="scss">

</style>
