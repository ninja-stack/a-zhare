<template>
  <v-container fluid fill-height>
    <v-layout row wrap align-center justify-center>
      <v-flex xs12 sm8 md4>
        <v-card class="elevation-12">
          <v-toolbar dark color="primary">
            <v-toolbar-title>Login</v-toolbar-title>
          </v-toolbar>
          <v-card-text>
            <v-form
              ref="form"
              v-model="valid"
              lazy-validation>
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
                label="Password"
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
              @click="validate"
              large block>
              Login
            </v-btn>
          </v-card-actions>
      
          <v-card-actions>
            <v-btn color="#3B5998" large block>
              <v-icon color="white">
                fab fa-facebook-f
              </v-icon>
            </v-btn>
            <v-btn color="#db4437" large block>
              <v-icon color="white">
                fab fa-google
              </v-icon>
            </v-btn>
            <v-btn color="#1DA1F2" large block>
              <v-icon color="white">
                fab fa-twitter
              </v-icon>
            </v-btn>
          </v-card-actions>
          <v-divider inset />
          <v-flex xs12>
            <div slot="label" class="pa-3 text-xs-center">
              Don't have an account? <a href="#">Sign up</a>
            </div>
          </v-flex>
        </v-card>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
  export default {
    data: () => ({
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
    }),

    methods: {
      validate () {
        if (this.$refs.form.validate()) {
          this.snackbar = true
        }
      }
    }
  }
</script>

<style scoped lang="scss">

</style>
