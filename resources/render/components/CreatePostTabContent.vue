<template>
  <v-card flat>
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-card-text>
        <v-textarea
          name="content"
          label="What do you want to share?"
          v-model="content"
          :rules="contentRules"
        />

        <v-select
          v-model="community_slugs"
          :items="communities"
          item-value="slug"
          item-text="name"
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
        content: '',
        contentRules: [
          v => !!v || 'Content is required'
        ],
        communities: [],
        community_slugs: [],
        loading: false
      };
    },
    async mounted() {
      await this.$store.dispatch('create-post/getCommunities', localStorage.getItem('token'));

      this.communities = this.$store.getters['create-post/communities'];
    },
    methods: {
      async validate() {
        if (this.$refs.form.validate()) {
          console.log('1');
          const formData = {
            content: this.content,
            community_slugs: this.community_slugs
          };

          console.log(formData);

          this.loading = true;
          await this.$store.dispatch('create-post/createContent', {
            formData,
            token: localStorage.getItem('token')
          });
          this.loading = false;

          if (!this.$store.getters['create-post/setErrorContentState']) {
            this.$router.push({path: '/'});
          }
        }
      }
    }
  };
</script>

<style lang="scss">

</style>
