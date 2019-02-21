<template>
  <v-card class="elevation-12">
    <card-header text="Sign Up" color="primary"/>
    <sign-up-form-card-form/>
    <link-with-text text="Have an account with us?" url="/login"
                    urlText="Login here"/>
  </v-card>
</template>

<script>
  import CardHeader from './CardHeader';
  import LinkWithText from './LinkWithText';
  import SignUpFormCardForm from './SignUpFormCardForm';

  export default {
    name: 'sign-up-form',
    components: {
      SignUpFormCardForm,
      CardHeader,
      LinkWithText
    }
  };
</script>
