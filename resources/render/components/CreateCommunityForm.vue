<template>
  <v-flex xs12>
    <v-form
      ref="form"
      v-model="valid"
      lazy-validation
    >
      <v-alert
        :value="$store.getters['create-community/isError']"
        type="error"
      >
        <ul>
          <li v-for="message of $store.getters['create-community/errorMessages']" :key="message">
            {{ message }}
          </li>
        </ul>
      </v-alert>

      <v-text-field
        v-model="id"
        :rules="idRules"
        label="Community ID"
        :counter=5
        required
      ></v-text-field>

      <v-text-field
        v-model="name"
        :rules="nameRules"
        label="Name"
        required
      ></v-text-field>

      <v-textarea
        name="description"
        label="Description"
        :rules="descriptionRules"
        v-model="description"
        required
      ></v-textarea>

      <v-btn
        :disabled="!valid"
        color="success"
        @click="create"
      >
        Create
      </v-btn>
    </v-form>
  </v-flex>
</template>
<script>
export default {
  name: 'create-community-form',
  data: () => ({
    valid: true,
    id: '',
    idRules: [
      v => !!v || 'Community is required',
      v => (v && v.length >= 5) || 'Community ID must be more than 5 characters'
    ],
    name: '',
    nameRules: [
      v => !!v || 'Name is required',
    ],
    email: '',
    descriptionRules: [
      v => !!v || 'Description is required',
    ],
    description: ''
  }),
  methods: {
    async create () {
      if (this.$refs.form.validate()) {
        const formData = {
          slug: this.id,
          name: this.name,
          description: this.description
        };

        const token = localStorage.getItem('token')

        await this.$store.dispatch(
          'create-community/create', 
          {formData, token}
        );

        if(!this.$store.getters['create-community/isError']) {
          this.$router.push('/');
        }
      }
    },
  }
}
</script>