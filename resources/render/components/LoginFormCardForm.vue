<template>
  <div>
    <v-card-text>
      <v-form
        ref="form"
        v-model="valid"
        lazy-validation>
        <v-alert
          :value="$store.getters['login/isError']"
          type="error"
        >
          <ul>
            <li v-for="message of $store.getters['login/errorMessages']">
              {{ message }}
            </li>
          </ul>
        </v-alert>
        <v-text-field
          prepend-icon="person"
          name="login"
          label="E-mail"
          type="text"
          required
          v-model="email"
          :rules="emailRules"
        ></v-text-field>
        <v-text-field
          id="password"
          prepend-icon="lock"
          name="password"
          label="Passwords"
          type="password"
          v-model="password"
          :rules="passwordRules"
          required
        ></v-text-field>
      </v-form>
    </v-card-text>
    <v-card-actions>
      <v-btn :disabled="!valid"
             color="success"
             @click="submit"
             large block>
        <v-progress-circular v-if="isProcessing"/>
        <span v-else>Login</span>
      </v-btn>
    </v-card-actions>
  </div>
</template>

<script>
  export default {
    name: 'login-form-card-form',
    data() {
      return {
        valid: true,
        email: '',
        emailRules: [
          v => !!v || 'E-mail is required',
          v => /.+@.+/.test(v) || 'E-mail must be valid'
        ],
        password: '',
        passwordRules: [
          v => !!v || 'Password is required'
        ],
        isProcessing: false
      };
    },
    methods: {
      async submit() {
        if (this.$refs.form.validate()) {
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
    }
  };
</script>

<style scoped lang="scss">

</style>
