<template>
  <v-card flat>
    <v-form
      ref="form"
      v-model="validRequest"
      lazy-validation
    >
      <v-card-text>
        <v-text-field
          label="Title"
          placeholder="Input your title"
          v-model="title"
          :rules="titleRules"
        ></v-text-field>

        <v-textarea
          label="Description"
          v-model="description"
          :rules="descriptionRules"
        ></v-textarea>

        <v-text-field
          label="Count"
          placeholder="Input your count"
          v-model="count"
          :rules="countRules"
        ></v-text-field>

        <v-text-field
          label="Reward"
          placeholder="Input your reward"
          v-model="rewards"
        ></v-text-field>

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
          :disabled="!validRequest"
          color="success"
          @click="validate"
        >
          Submit
        </v-btn>
      </v-card-actions>
    </v-form>
  </v-card>
</template>

<script>
  export default {
    name: 'create-request-tab-content',
    data() {
      return {
        validRequest: true,
        title: '',
        titleRules: [
          v => !!v || 'Title is required'
        ],
        description: '',
        descriptionRules: [
          v => !!v || 'Description is required'
        ],
        count: '',
        countRules: [
          v => !!v || 'Count is required'
        ],
        communities: [],
        community_slugs: [],
        rewards: '',
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
          const formData = {
            title: this.title,
            count: this.count,
            content: this.description,
            community_slugs: this.community_slugs,
            rewards: this.rewards
          };

          this.loading = true;
          await this.$store.dispatch('create-post/createRequest', {
            formData,
            token: localStorage.getItem('token')
          });
          this.loading = false;

          if (!this.$store.getters['create-post/setErrorRequestState']) {
            this.$router.push({path: '/'});
          }
        }
      }
    }
  };
  ``;
</script>

<style scoped lang="scss">

</style>
