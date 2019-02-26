<template>
  <v-card flat>
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-card-text>
        <v-textarea
          name="content"
          label="What do you want to share?"
          v-model="post"
          :rules="postRules"
        />

        <v-select
          v-model="value"
          :items="items"
          attach
          chips
          label="Choose Community"
          multiple
        ></v-select>
      </v-card-text>

      <v-card-actions>
        <v-btn
          :disabled="!valid"
          color="success"
          @click="validate">
          Submit
        </v-btn>
      </v-card-actions>
    </v-form>
  </v-card>
</template>

<script>
  export default {
    name: 'create-post-tab-content',
    data() {
      return {
        valid: true,
        post: '',
        postRules: [
          v => !!v || 'Content is required'
        ],
        items: ['foo', 'bar', 'fizz', 'buzz'],
        value: []
      };
    },
    methods: {
      validate() {
        this.$refs.form.validate();
      }
    }
  };
</script>

<style lang="scss">

</style>
