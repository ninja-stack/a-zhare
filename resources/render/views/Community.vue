<template>
  <div>
    <navigation-menu :name="$store.getters['posts/communityName']"/>
    <v-content>
      <v-container grid-list-md>
        <v-layout row wrap>
          <v-flex xs12 v-if="$store.getters['posts/isError']">
            <p>No such community</p>
          </v-flex>
          <v-flex xs12 ma-2 v-else v-for="post in $store.getters['posts/posts']"
                  :key="post.id">
            <request-post-card
              v-if="post.type === 'REQUEST'"
              :post="post"
              button="Apply"
              url="/applicants"
            />
            <content-post-card :post="post" v-else/>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </div>
</template>

<script>
  import NavigationMenu from '../components/NavigationMenu';
  import PostCardInput from '../components/PostCardInput';
  import RequestPostCard from '../components/RequestPostCard';
  import ContentPostCard from '../components/ContentPostCard';

  export default {
    components: {
      ContentPostCard,
      RequestPostCard,
      PostCardInput,
      NavigationMenu
    },
    async mounted() {
      const slug = this.$route.params.slug;
      await this.onload(slug);
    },
    beforeRouteUpdate(to, from, next) {
      const slug = to.params.slug;
      this.onload(slug);
      next();
    },
    methods: {
      async onload(slug) {
        await this.$store.dispatch('posts/getCommunityInfo', slug);
        await this.$store.dispatch('posts/getPosts', slug);
      }
    }
  };
</script>

<style scoped lang="scss">

</style>
