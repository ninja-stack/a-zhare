<template>
  <div>
    <v-snackbar
      v-model="$store.getters['login/isError']"
      color="error"
      :timeout="0"
      top
    >
      <ul>
        <li v-for="error of $store.getters['login/errorMessages']">
          {{ error }}
        </li>
      </ul>
    </v-snackbar>
    <v-card-text>
      <v-form id="login-form" lazy-validation @submit.prevent="submit">
        <v-text-field
          prepend-icon="person"
          name="login"
          label="E-mail"
          type="text"
          required
          v-model="email"
        ></v-text-field>
        <v-text-field
          id="password"
          prepend-icon="lock"
          name="password"
          label="Passwords"
          type="password"
          v-model="password"
          required
        ></v-text-field>
      </v-form>
    </v-card-text>
    <v-card-actions>
      <v-btn
        type="submit"
        form="login-form"
        :disabled="isProcessing"
        color="success"
        large block
      >
        Login
      </v-btn>
    </v-card-actions>
  </div>
</template>

<script>
  export default {
    name: 'login-card-form',
    data() {
      return {
        snackbar: false,
        email: '',
        password: '',
        isProcessing: false
      };
    },
    methods: {
      async submit() {
        const formData = {
          email: this.email,
          password: this.password
        };

        this.isProcessing = true;
        await this.$store.dispatch('login/login', formData);
        this.isProcessing = false;

        if (!this.$store.getters['login/isError']) {
          this.$router.push('/');
        }
      }
    }
  };
</script>

<style scoped lang="scss">

</style>
