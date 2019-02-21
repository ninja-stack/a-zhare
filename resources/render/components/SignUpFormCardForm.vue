<template>
  <div>
    <v-card-text>
      <v-form
        ref="form"
        v-model="valid"
        lazy-validation>
        <v-text-field
          id="fullname"
          prepend-icon="person"
          name="fullname"
          label="Full Name"
          type="text"
          v-model="fullname"
          :rules="fullnameRules"
          required
        ></v-text-field>
        <v-combobox
          prepend-icon="fas fa-circle" 
          v-model="gender"
          :items="items"
          label="Select your gender"
          :rules="genderRules"
          required
        ></v-combobox>

        <v-text-field
          prepend-icon="mail"
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

        <v-text-field
          id="confirm_password"
          prepend-icon="lock"
          name="confirm_password"
          label="Confirm Password"
          type="password"
          v-model="confirm_password"
          :rules="confirm_passwordRules"
          required
        ></v-text-field>
      </v-form>
    </v-card-text>

    <v-card-actions>
      <v-btn :disabled="!valid"
        color="success"
        @click="validate"
        large block>
        Sign Up
      </v-btn>
    </v-card-actions>
    <v-divider inset />
  </div>
</template>

<script>
export default {
  name: 'sign-up-form-card-form',
  data: () => ({
    valid: true,
    fullname: '',
    fullnameRules: [
      v => !!v || 'Full Name is required'
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+/.test(v) || 'E-mail must be valid'
    ],
    password: '',
    passwordRules: [
      v => !!v || 'Password is required'
    ],
    confirm_password: '',
    confirm_passwordRules: [
      v => !!v || 'Confirm Password is required'
    ],
    gender: '',
    items: [
      'Male',
      'Female'
    ],
    genderRules: [
      v => !!v || 'Gender is required'
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
