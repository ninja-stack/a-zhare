<template>
  <v-card class="elevation-12">
    <card-header text="Sign Up"  color="primary"/>
    <signup-form-card-form />
    <link-with-text text="Have an account with us?" url="/login" urlText="Login here"/>
  </v-card>
</template>

<script>
import CardHeader from './CardHeader';
import LinkWithText from './LinkWithText';
import SignupFormCardForm from './SignupFormCardForm';
  export default {
    name: 'signup-form',
    components: {
      CardHeader,
      LinkWithText,
      SignupFormCardForm
    }
  };
</script>