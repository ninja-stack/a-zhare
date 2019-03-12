<template>
  <div>
    <v-snackbar
      v-model="$store.getters['signUp/isError']"
      color="error"
      :timeout="0"
      top
      multi-line
    >
      <ul>
        <li v-for="error of $store.getters['signUp/errorMessages']">
          {{ error }}
        </li>
      </ul>
    </v-snackbar>
    <v-card-text>
      <v-form
        ref="form"
        v-model="valid"
        lazy-validation
      >
        <v-text-field
          id="fullName"
          prepend-icon="person"
          name="fullName"
          label="Full Name"
          type="text"
          v-model="fullName"
          required
        ></v-text-field>
        <v-combobox
          prepend-icon="fas fa-circle" 
          v-model="gender"
          :items="items"
          label="Select your gender"
          required
        ></v-combobox>

        <v-text-field
          prepend-icon="mail"
          name="email"
          label="E-mail"
          type="text"
          required
          v-model="email"
        ></v-text-field>

        <v-text-field
          id="password"
          prepend-icon="lock"
          name="password"
          label="Password"
          type="password"
          v-model="password"
          required
        ></v-text-field>

        <v-text-field
          id="confirm_password"
          prepend-icon="lock"
          name="confirm_password"
          label="Confirm Password"
          type="password"
          v-model="confirm_password"
          required
        ></v-text-field>
      </v-form>
    </v-card-text>

    <v-card-actions>
      <v-btn
        :disabled="isProcessing"
        color="success"
        @click="submit"
        large block
      >
        Sign Up
      </v-btn>
    </v-card-actions>
    <v-divider inset />
  </div>
</template>

<script>
  export default {
    name: 'sign-up-card-form',
    data: () => ({
      valid: true,
      fullName: '',
      email: '',
      password: '',
      confirm_password: '',
      gender: '',
      items: [
        'Male',
        'Female'
      ],
      isProcessing: false
    }),

    methods: {
      async submit() {
        if(this.$refs.form.validate()) {
          const formData = {
            name: this.fullName,
            gender: this.gender === 'Male' ? '1' : '0',
            email: this.email,
            password: this.password,
            password_confirmation: this.confirm_password
          };

          this.isProcessing = true;
          await this.$store.dispatch('signUp/register', formData);
          this.isProcessing = false;

          if(!this.$store.getters['signUp/isError']) {
            this.$router.push('/')
          }
        }
      }
    }
  };
</script>
