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
        Login
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
        ]
      };
    },
    methods: {
      async submit() {
        if (this.$refs.form.validate()) {
          const formData = {
            email: this.email,
            password: this.password
          };

          await this.$store.dispatch('login/login', formData);

          if (localStorage.getItem('token') !== null) {
            this.$router.push('/');
          }
        }
      }
    },
    mounted: function() {
      localStorage.removeItem('token');
    }
  };
</script>

<style scoped lang="scss">

</style>
